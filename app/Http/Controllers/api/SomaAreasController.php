<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SomaAreas;
use App\Models\Triangulo;
use App\Models\Retangulo;

class SomaAreasController extends Controller
{
    
    public function index()
    {
        $triangulo  = Triangulo::all('base', 'altura');
        $retangulo = Retangulo::all('base', 'altura');
        //$obj = json_decode($triangulo);

        foreach ($triangulo as $key) {
           $areaTriangulo = $key->base * $key->altura /2;
           //echo "Area Triangulo: $areaTriangulo<br>";
        }

        foreach ($retangulo as $key) {
           $areaRetangulo = $key->base * $key->altura;
           //echo  "Area Retangulo: $areaRetangulo";
        }
        
        echo "Area Triangulo: $areaTriangulo - Area Retangulo: $areaRetangulo<br>";
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
