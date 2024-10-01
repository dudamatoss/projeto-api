<?php

namespace App\Http\Controllers;

use App\Responses\ApiResponse;
use Illuminate\Http\Request;
use Response;

class ClienteController extends Controller
{
    public function salvar()
    {

    }
       public function listar()
    {
      return ApiResponse::success(data: ["nome" => "Eduarda"]);
    }
     public function editar(int $id)
    {

    }

    public function excluir(int $id)
    {

    }
}
