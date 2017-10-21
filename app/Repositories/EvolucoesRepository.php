<?php

namespace App\Repositories;

use App\Models\Evolucoes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EvolucoesRepository
 * @package App\Repositories
 * @version October 20, 2017, 9:10 am UTC
 *
 * @method Evolucoes findWithoutFail($id, $columns = ['*'])
 * @method Evolucoes find($id, $columns = ['*'])
 * @method Evolucoes first($columns = ['*'])
*/
class EvolucoesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tamano_in',
        'tamanho_fin',
        'data_avaliacao',
        'descricao'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Evolucoes::class;
    }
}
