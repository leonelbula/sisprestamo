<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbonoPrestamo extends Model
{
    use HasFactory;

    public function prestamo(){

        return $this->belongsTo(Prestamo::class);

    }
    public function client(){

        return $this->belongsTo(Client::class);
    }
}
