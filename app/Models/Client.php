<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['fullname',
                           'identification',
                           'direction',
                           'town',
                           'department',
                           'phone',
                           'email'];

    public function prestamo(){

        return $this->hasMany(Prestamo::class);
    }
    public function abonos(){

        return $this->hasMany(AbonoPrestamo::class);

    }
}
