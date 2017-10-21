<?php

namespace App\Repositories;

use App\Models\Perfil;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PerfilRepository
 * @package App\Repositories
 * @version October 20, 2017, 9:13 am UTC
 *
 * @method Perfil findWithoutFail($id, $columns = ['*'])
 * @method Perfil find($id, $columns = ['*'])
 * @method Perfil first($columns = ['*'])
*/
class PerfilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descricao',
        'trabalhadores_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Perfil::class;
    }
}
