<?php

namespace App\Repositories;

use App\Models\Trabalhador;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TrabalhadorRepository
 * @package App\Repositories
 * @version October 20, 2017, 9:17 am UTC
 *
 * @method Trabalhador findWithoutFail($id, $columns = ['*'])
 * @method Trabalhador find($id, $columns = ['*'])
 * @method Trabalhador first($columns = ['*'])
*/
class TrabalhadorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'sexo',
        'data_nascimento',
        'telefone',
        'endereco',
        'foto',
        'users_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Trabalhador::class;
    }
}
