<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Etablisement;
use Illuminate\Http\Request;

class EtablisementController extends Controller
{
    public function index(){
        $etablisements=Etablisement::with('materials','users')->get();
        return view('page.etablisement.index',compact('etablisements'));
    }
    public function create(){
        return view('page.etablisement.create');
    }
    public function store(Request $request){
        $valide=$request->validate([
            'codeEtablisement' => 'required|unique:etablisements',
            'nom' => 'required|max:255',
        ]);

        Etablisement::create($valide);
        return redirect('etablisements');
    }
    public function edit(Etablisement $etablisement){
        return view('page.etablisement.edit',compact('etablisement'));
    }
    public function update(Request $request,Etablisement $etablisement){
        $valide=$request->validate([
            'codeEtablisement' => 'required|unique:etablisements',
            'nom' => 'required|max:255',
        ]);

        $etablisement->update($valide);
        return redirect('etablisements');
    }
    public function destroy($id){
        Etablisement::destroy($id);
        return back();
    }
}
