<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users= array(
            [
                "name" => "Bruno Rabelo",
                "email" => "bruno@ufop.com",
                "password" => Hash::make("12345678"),
                "area" => "Banco de Dados",
            ],

            [
                "name" => "Janielle Soares",
                "email" => "janjan@ufop.com",
                "password" => Hash::make("12345678"),
                "area" => "Sistema de Apoio a Decisão",
            ],

            [
                "name" => "Fernando Oliveira",
                "email" => "fernadin@ufop.com",
                "password" => Hash::make("12345678"),
                "area" => "Sistemas Web",
            ],
            

        );

        DB::table("users")->insert($users);
    }
}
