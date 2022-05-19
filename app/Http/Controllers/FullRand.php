<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullRand extends Controller
{
    public function Load(){
        header("Access-Control-Allow-Origin: *");
        header("Origin:http://api.namelib.123alehot.net.br");
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
        //$count4=mysqli_num_rows($query4);
        $count4=(9999+101);
        while($row_produto = mysqli_fetch_array($query4)){
        if ($comanda == rand(100,($count4))){
            $nome1 = $row_produto["nome"];
        }

        if ($comanda == rand(100,($count4))){
            $nome2 = $row_produto["nome"];

        }

        if ($comanda == rand(100,($count4))){
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
