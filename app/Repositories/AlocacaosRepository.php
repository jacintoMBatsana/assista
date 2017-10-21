<?php

namespace App\Repositories;

use App\Models\Alocacaos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlocacaosRepository
 * @package App\Repositories
 * @version October 20, 2017, 9:05 am UTC
 *
 * @method Alocacaos findWithoutFail($id, $columns = ['*'])
 * @method Alocacaos find($id, $columns = ['*'])
 * @method Alocacaos first($columns = ['*'])
*/
class AlocacaosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'projectos_id',
        'trabalhadores_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alocacaos::class;
    }
}
