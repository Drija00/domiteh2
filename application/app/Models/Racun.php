<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Racun extends Model
{
    use HasFactory;
    protected $fillable = [
        'pacijent_id',
        'lek_id',
        'datum_od',
        'datum_do',
    ];

    public function pacijent(){
        return $this->belongsTo(Pacijent::class);
    }

    public function lek(){
        return $this->belongsTo(Lek::class);
    }
}
