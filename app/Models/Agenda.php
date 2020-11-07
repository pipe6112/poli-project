<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = "agenda";

    protected $fillable = [
        "fecha",
        "hora_inicio",
        "hora_final",
        "estado",
        "persona_id",
    ];

    public static $rules = [
        'fecha' => 'required|date',
        'hora_inicio' => 'required',
        'hora_final' => 'required',
        'estado' => 'in:1,0',
        'persona_id' => 'required|exists:persona,id',
    ];
}
