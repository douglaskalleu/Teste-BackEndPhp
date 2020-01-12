<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Triangulo extends Model
{
    protected $fillable = [
        'base', 'altura'
    ];

    public function area(){
        return $this->belongsTo('triangulos');
    }
}
