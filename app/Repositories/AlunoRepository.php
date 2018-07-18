<?php

namespace App\Repositories;

use App\Models\Aluno;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlunoRepository
 * @package App\Repositories
 * @version July 18, 2018, 7:31 pm UTC
 *
 * @method Aluno findWithoutFail($id, $columns = ['*'])
 * @method Aluno find($id, $columns = ['*'])
 * @method Aluno first($columns = ['*'])
*/
class AlunoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'matricula',
        'nome',
        'endereco',
        'bairro',
        'cep',
        'cidade',
        'uf',
        'email',
        'dtentrada'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Aluno::class;
    }
}
