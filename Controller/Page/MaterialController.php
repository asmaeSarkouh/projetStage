<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Type;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(){
        $materials=Material::all();
        return view('page.material.index',compact('materials'));
    }
    public function create(){
        $types=Type::all();
        return view('page.material.create',compact('types'));
    }
    public function store(Request $request){
        $valide=$request->validate([
            'description'=>'required|max:255',
            'dateLivrision'=>'required|date',
            'lieu'=>'required|in:Direction,Bibliotheque,SMM,Salle de eouvr,Labo',
            'type_id'=>'required|exists:types,id',
        ]);
        Material::create($valide);
        return redirect('materials');
    }
    public function edit(Material $material){
        $types=Type::all();
        return view('page.material.edit',compact('material','types'));
    }
    public function update(Request $request,Material $material){
        $valide=$request->validate([
            'description'=>'required|max:255',
            'dateLivrision'=>'required|date',
            'lieu'=>'required|in:Direction,Bibliotheque,SMM,Salle de eouvr,Labo',
            'type_id'=>'required|exists:types,id',
        ]);
        $material->update($valide);
        return redirect('materials');
    }
    public function destroy($id){
        Material::destroy($id);
        return back();
    }
}
