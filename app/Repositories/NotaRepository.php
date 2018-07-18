<?php

namespace App\Repositories;

use App\Models\Nota;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NotaRepository
 * @package App\Repositories
 * @version July 18, 2018, 6:53 pm UTC
 *
 * @method Nota findWithoutFail($id, $columns = ['*'])
 * @method Nota find($id, $columns = ['*'])
 * @method Nota first($columns = ['*'])
*/
class NotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idaluno',
        'iddisciplina',
        'nota1',
        'nota2',
        'nota3'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Nota::class;
    }
}
