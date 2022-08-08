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

     //Função cadastrar produtos
    public function cadastrar(Request $request){

        if($request -> submit == "edit"){

           $modif = DB::table('produtos')
              ->where('id', $request->id)
              ->update(
                [
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'tensao' => $request->tensao,
                'marca' => $request->marca,
                'quantidade' => $request->quantidade
                ]
            );
            $result = DB::select('select * from produtos');
            return view('listagem', ['editar' => true, 'produtos' => $result]);
            
        }else{
        
        DB::table('produtos')->insert(
            [
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'tensao' => $request->tensao,
                'marca' => $request->marca,
                'quantidade' => $request->quantidade
                ]
        );
    }
    $result = DB::select('select * from produtos');
    return view('listagem', ['cadastrar' => true, 'produtos' => $result]);
    
    }
    
    public function retorno(){
        $result = DB::select('select * from produtos');
        return view('listagem', ['produtos' => $result]);
    }

    //Função deletar produtos
    public function deletar($id){

        DB::table('produtos')->where('id', '=', $id)->delete();
        $result = DB::select('select * from produtos');
        return view('listagem', ['deletar' => true, 'produtos' => $result]);
    }

        //Função editar produtos
    public function editar($id){

        $result = DB::table('produtos')->where('id', '=', $id)->first();
        return view('cadastrar', ['produtos' => $result]);
    }
}

