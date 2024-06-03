<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca_id', 'modelo', 'tipo', 'numero_serie'
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
