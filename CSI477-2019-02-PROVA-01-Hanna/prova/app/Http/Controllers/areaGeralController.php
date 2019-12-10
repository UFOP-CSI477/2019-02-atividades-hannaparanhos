<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class areaGeralController extends Controller
{
    function index(){
        $seeAllProjetos = DB::table('projetos as x')
        ->join('alunos as a', 'x.aluno_id', '=','a.id')
        ->join('users as s', 'x.professors_id', '=','s.id')
        ->select('x.id','s.name', 'a.nome','s.area','x.semestre','x.ano','x.titulo')
        ->orderBy('x.ano', 'desc')
        ->orderBy('x.semestre', 'desc')
        ->orderBy('a.nome','asc')
        ->get();
        return view('areageral', ['todos' => $seeAllProjetos]);
    }

    function pesquisaArea(Request $area){
        $dado = $area->area;

        $result = DB::table('users')
        ->select('id','name','area')
        ->where('area','like','%' . $dado . '%')
        ->orderBy('area', 'asc')->orderBy('name', 'asc')->get();

        if(empty($result->items)){
            $result = DB::table('users')->select('id','name','area')->get();
        }

        return view('pesquisaarea', ['prof' => $result]);
    }
}
