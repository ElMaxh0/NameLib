<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameLoad extends Controller
{
    public function Load( $p1, $p2, $p3, $p4){
        $selectednm = explode("-",$p4);
        header("Access-Control-Allow-Origin: *");
        header("Origin:http://api.clonacartao.cc");
        header ("Access-Control-Expose-Headers: Content-Length, X-JSON");
        header ("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
        header ("Access-Control-Allow-Headers: Content-Type, Authorization, Accept, Accept-Language, X-Authorization");
        header('Access-Control-Max-Age: 86400');
        include('db.php');
        $comanda =0;
        $nome=0;
        $nome1 ="";
        $nome2 ="";
        $nome3 ="";
        echo '[';
        $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
        $consulta = "SELECT * FROM regnametable ";
        $query4=mysqli_query($conexao, $consulta);
        $count4=mysqli_num_rows($query4);
        while($row_produto = mysqli_fetch_array($query4)){
        if ($comanda == $selectednm[0]){
            $nome1 = $row_produto["nome"];
        }

        if ($comanda == $selectednm[1]){
            $nome2 = $row_produto["nome"];

        }

        if ($comanda == $selectednm[2]){
            $nome3 = $row_produto["nome"];
        }
        $comanda = $comanda +1;
        }
        echo json_encode([
            "nome" => $nome1,
            "segnome" => $nome2,
            "sobrenome" => $nome3,
        ]);
        http_response_code(200);
        mysqli_close($conexao);
        echo ']';
    }
}
