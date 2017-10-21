<?php

namespace App\Repositories;

use App\Models\Projecto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProjectoRepository
 * @package App\Repositories
 * @version October 20, 2017, 9:17 am UTC
 *
 * @method Projecto findWithoutFail($id, $columns = ['*'])
 * @method Projecto find($id, $columns = ['*'])
 * @method Projecto first($columns = ['*'])
*/
class ProjectoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'desctricao',
        'duracao',
        'data_inicio',
        'data_fim',
        'produtos_id',
        'infraestruturas_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Projecto::class;
    }
}
