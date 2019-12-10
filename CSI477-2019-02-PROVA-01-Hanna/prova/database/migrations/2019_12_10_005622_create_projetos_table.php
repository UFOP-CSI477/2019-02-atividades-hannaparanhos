<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titulo");
            $table->integer("semestre");
            $table->integer("ano");
            $table->bigInteger("aluno_id");
            $table->bigInteger("professors_id");
            $table->timestamps();
            $table->foreign("aluno_id")->references("id")->on("alunos");
            $table->foreign("professors_id")->references("id")->on("users");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}
