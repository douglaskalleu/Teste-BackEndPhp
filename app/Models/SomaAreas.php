<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SomaAreas extends Model
{
    public function Triangulo(){
        return $this->belongsTo('triangulos');
    }
}
