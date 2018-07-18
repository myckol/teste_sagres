<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelAluno extends Model
{
    protected $fillable = ['matricula','nome','endereco','bairro','cep', 'cidade', 'uf', 'email', 'dtentrada'];
    protected $table = 'tbaluno';
}
