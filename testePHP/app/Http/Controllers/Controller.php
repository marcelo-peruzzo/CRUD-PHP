<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function cadastrar(Request $request){

        DB::table('produtos')->insert(
            [
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'tensao' => $request->tensao,
                'marca' => $request->marca,
                'quantidade' => $request->quantidade
                ]
        );
    
        return redirect('/cadastro');
    
    }

    public function retorno(){
        $result = DB::select('select * from produtos');
        return view('listagem', ['produtos' => $result]);
    }
}

