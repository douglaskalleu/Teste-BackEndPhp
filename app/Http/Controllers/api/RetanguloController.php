<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Retangulo;

class RetanguloController extends Controller
{
    
    public function index()
    {
        return Retangulo::all();
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        Retangulo::create($request->all());
    }

   
    public function show($id)
    {
        return Retangulo::findOrFail($id);
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $retangulo = Retangulo::findOrFail($id);
        $retangulo->update($request->all());
    }

    
    public function destroy($id)
    {
        $retangulo = Retangulo::findOrFail($id);
        $retangulo->update();
    }
}
