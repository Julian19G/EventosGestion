<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{
    use HasFactory;
    protected $table = 'participaciones';

    public function evento()
{
    return $this->belongsTo(Evento::class);
}

public function organizador()
{
    return $this->belongsTo(Organizador::class);
}

}

