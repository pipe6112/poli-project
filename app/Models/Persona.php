<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Persona
 * @package App\Models
 * @version August 13, 2020, 3:25 pm -05
 *
 * @property string $nombre_persona
 * @property integer $identificacion
 * @property string $correo
 */
class Persona extends Model
{
    public $table = 'persona';
       
    public $timestamps = false;

    public $fillable = [
        'nombre_persona',
        'identificacion',
        'correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre_persona' => 'string',
        'identificacion' => 'integer',
        'correo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre_persona' => 'required',
        'identificacion' => 'required',
        'correo' => 'required|email'
    ];

    
}
