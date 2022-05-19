<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameLoad extends Controller
{
    public function Load(string $p1,string $p2,string $p3)
    {
        
        header("Access-Control-Allow-Origin:*");
        header("Origin:http://api.namelib.123alehot.net.br");
        header ("Access-Control-Expose-Headers: Content-Length, X-JSON");
        header ("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
        header ("Access-Control-Allow-Headers: Content-Type, Authorization, Accept, Accept-Language, X-Authorization");
        header('Access-Control-Max-Age: 86400');
        include('db.php');
        echo $p1.$p2.$p3;
        $comanda =0;
        $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
        $consulta = "SELECT * FROM regnametable0 ";
        $query4=mysqli_query($conexao, $consulta);
        $count4=mysqli_num_rows($query4);
        $result_joystick= $query4;
        extract($result_joystick);
        print_r($result_joystick);
        http_response_code(200);
        mysqli_close($conexao);
    }
    //
}
