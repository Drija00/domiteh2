<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacijent extends Model
{
    use HasFactory;
    protected $fillable = [
        'ime',
        'prezime',
        'datum_rodjenja',
        'br_racuna',
    ];

    public function racuni(){
        return $this->hasMany(Racun::class);
    }
}
