<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Projeto;

class areaAdmController extends Controller
{
        function index(){

            $result = DB::table('users')
                        ->select('id','name','area')
                        ->orderBy('area', 'asc')->orderBy('name', 'asc')->get();

            $resultado = DB::table('alunos')
                        ->select('id','nome','curso')
                        ->orderBy('curso', 'asc')->orderBy('nome', 'asc')->get();


                        return view('areaadm', ['prof' => $result],['aluno'=>$resultado]);

            return view('areaadm');
        }

        function insert(Request $dados){
            $tcc = array(
                'professors_id' => $dados->professors_id,
                'aluno_id' => $dados->aluno_id,
                'titulo' => $dados->titulo,
                'ano' => $dados->ano, 
                'semestre' => $dados->semestre);

            $result = new Projeto($tcc);
            $result->save();

            return redirect('area_geral');
            
        }

}
