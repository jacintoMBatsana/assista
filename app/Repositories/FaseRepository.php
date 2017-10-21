<?php

namespace App\Repositories;

use App\Models\Fase;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FaseRepository
 * @package App\Repositories
 * @version October 20, 2017, 9:11 am UTC
 *
 * @method Fase findWithoutFail($id, $columns = ['*'])
 * @method Fase find($id, $columns = ['*'])
 * @method Fase first($columns = ['*'])
*/
class FaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'descricao',
        'percentagem',
        'data_inicio',
        'data_fim',
        'tratamentos_id',
        'projectos_id',
        'evolucoes_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fase::class;
    }
}
