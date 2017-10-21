<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Perfil
 * @package App\Models
 * @version October 20, 2017, 9:13 am UTC
 *
 * @property \App\Models\Trabalhadore trabalhadore
 * @property \Illuminate\Database\Eloquent\Collection alocacaos
 * @property \Illuminate\Database\Eloquent\Collection projectos
 * @property string descricao
 * @property integer trabalhadores_id
 */
class Perfil extends Model
{
    use SoftDeletes;

    public $table = 'perfils';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'descricao',
        'trabalhadores_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descricao' => 'string',
        'trabalhadores_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function trabalhadore()
    {
        return $this->belongsTo(\App\Models\Trabalhadore::class);
    }
}
