<?php

namespace App\Repositories;

use App\Models\Disciplina;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DisciplinaRepository
 * @package App\Repositories
 * @version July 18, 2018, 6:52 pm UTC
 *
 * @method Disciplina findWithoutFail($id, $columns = ['*'])
 * @method Disciplina find($id, $columns = ['*'])
 * @method Disciplina first($columns = ['*'])
*/
class DisciplinaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'disciplina'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Disciplina::class;
    }
}
