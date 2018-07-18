<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelAluno extends Model
{
    protected $fillable = ['name','description','quantity','price'];
    protected $table = 'tbaluno';
}
