<?php

namespace App\Repositories;

use App\Models\Categorias;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoriasRepository
 * @package App\Repositories
 * @version October 20, 2017, 9:08 am UTC
 *
 * @method Categorias findWithoutFail($id, $columns = ['*'])
 * @method Categorias find($id, $columns = ['*'])
 * @method Categorias first($columns = ['*'])
*/
class CategoriasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'descricao'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Categorias::class;
    }
}
