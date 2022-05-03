<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Services\Auth\AuthService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private AuthService $authService;

    /**
     * AuthController constructor.
     * @param AuthService $authService
     */
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(LoginRequest $request): JsonResponse
    {

        return $this->authService->login($request->validated());
    }


    public function register(RegisterRequest $cretentials)
    {
        //include("../db.php");
        //$conn= mysqli_connect($host,$user,$pass,$dbname);
        //$token=(rand(100, 995).rand(100, 995).rand(100, 995).rand(100, 995).rand(10, 99).rand(100, 995).rand(100, 995).rand(100, 995).rand(100, 995).rand(10, 99).rand(10, 99)).$id.$id;

        //$sql2 = "SELECT id  FROM users ORDER BY id ";
        //$data=mysqli_query($conn , $sql2);
        //$dataehora = date('Y-m-d H:i:s');
        //$id = (mysqli_num_rows($data))+1;
        //$name=$cretentials['name'];
        //$email= $cretentials['email'];
        //$date_birth = $cretentials['date_birth'];
        //$phone = $cretentials['phone'];
        //$password = Hash::make($cretentials['password']);
        //$sql = "INSERT INTO users VALUES ";
        //$sql .= "('$id','$name', '$email', '$phone', '$date_birth', '$dataehora','$password','$token','$dataehora', '$dataehora')";
        //mysqli_query($conn,$sql) or die("Erro 500 O Servidor Nao Conseguiu processar sua requisição ");
        //mysqli_close($conn);
        //return "REGISTRADO";

        //return $this->authService->store($request->validated());
    }

    public function logout():JsonResponse
    {
        if(auth('api')->check()) {
            return $this->authService->logout();
        }else{
            return send_error('Erro! Token inválido', '', 403);
        }
    }
}
