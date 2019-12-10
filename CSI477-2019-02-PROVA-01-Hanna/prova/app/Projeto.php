<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['professors_id', 'aluno_id', 'titulo', 'ano', 'semestre'];
}
