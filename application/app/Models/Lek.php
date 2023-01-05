<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lek extends Model
{
    use HasFactory;
    protected $fillable = [
        'JKL',
        'naziv',
        'cena',
        'strucni_naziv',
    ];

    public function racuni(){
        return $this->hasMany(Racun::class);
    }
}
