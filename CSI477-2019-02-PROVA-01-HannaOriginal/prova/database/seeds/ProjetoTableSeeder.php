<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjetoTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projetos = array(
            [
                "aluno_id" => "1",
                "professors_id" => "1",
                "titulo" => "Sistema de classificação de Dados",
                "semestre" => "2",
                "ano" => "2020"

            ],

            [
                "aluno_id" => "2",
                "professors_id" => "2",
                "titulo" => "Apoio de decisão para empresas",
                "semestre" => "2",
                "ano" => "2019"

            ],

            [
                "aluno_id" => "3",
                "professors_id" => "3",
                "titulo" => "Sistema Web para TCC",
                "semestre" => "1",
                "ano" => "2018"

            ],

            [
                "aluno_id" => "4",
                "professors_id" => "1",
                "titulo" => "Regressão de Dados",
                "semestre" => "1",
                "ano" => "2020"

            ],

            [
                "aluno_id" => "2",
                "professors_id" => "2",
                "titulo" => "Segurança do Sistema",
                "semestre" => "2",
                "ano" => "2017"

            ]
            );

            DB::table("projetos")->insert($projetos);
    }
}
