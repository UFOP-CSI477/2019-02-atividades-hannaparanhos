<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alunos = array(
            [
                "nome" => "Hanna",
                "curso" => "SJM"
            ],

            [
                "nome" => "Rafael",
                "curso" => "EJM"
            ],

            [
                "nome" => "Elielson",
                "curso" => "PJM"
            ],

            [
                "nome" => "Thiago",
                "curso" => "CJM"
            ]
            );

            DB::table("alunos")->insert($alunos);
    }
}
