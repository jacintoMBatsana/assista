<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categorias
 * @package App\Models
 * @version October 20, 2017, 9:08 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection alocacaos
 * @property \Illuminate\Database\Eloquent\Collection Produto
 * @property \Illuminate\Database\Eloquent\Collection projectos
 * @property string nome
 * @property string descricao
 */
class Categorias extends Model
{
    use SoftDeletes;

    public $table = 'categorias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function produtos()
    {
        return $this->hasMany(\App\Models\Produto::class);
    }
}
