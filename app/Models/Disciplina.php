<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Disciplina
 * @package App\Models
 * @version July 18, 2018, 6:52 pm UTC
 *
 * @property \App\Models\Tbaluno tbaluno
 * @property \Illuminate\Database\Eloquent\Collection Tbnota
 * @property integer codigo
 * @property string disciplina
 */
class Disciplina extends Model
{
    use SoftDeletes;

    public $table = 'tbdisciplina';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'disciplina'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo' => 'integer',
        'disciplina' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function aluno()
    {
        return $this->belongsTo(\App\Models\Aluno::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function notas()
    {
        return $this->hasMany(\App\Models\Nota::class);
    }
}
