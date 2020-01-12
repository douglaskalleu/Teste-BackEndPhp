<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Triangulo;

class TrianguloController extends Controller
{

    public function index()
    {
        return Triangulo::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Triangulo::create($request->all());
    }

    public function show($id)
    {
        return Triangulo::findOrFail($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $triangulo = Triangulo::findOrFail($id);
        $triangulo->update($request->all());
    }

    public function destroy($id)
    {
        $triangulo = Triangulo::findOrFail($id);
        $triangulo->delete();
    }
}
