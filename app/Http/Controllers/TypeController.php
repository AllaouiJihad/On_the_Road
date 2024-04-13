<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    
    public function showTypes(){
        $types = Type::all();
        return view('types',compact('types'));
    }

    public function addType(Request $request){
        $messages = [
            'type.required' => 'Le type est requis.',
        ];
        $validateData = Validator::make($request->all(), [
            'type' => 'required|string'
        ],$messages);
        
        if ($validateData->fails()) {
            
            return redirect()->back()->withErrors($validateData)->withInput();
        }
        
        $type = Type::create([
            'type' => $request->input('type'),
        ]);
        if ($type!= NULL) {
            return redirect()->back()->with('success', 'Type ajouté avec succès !');
        } else {
            return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de l\'ajout du type.']);
        }
    }


    public function updateType(Request $request, $id){
        
        $messages = [
            'type.required' => 'Le type est requis.',
        ];
        $validateData = Validator::make($request->all(), [
            'type' => 'required|string'
        ],$messages);
        if ($validateData->fails()) {
            
            return redirect()->back()->withErrors($validateData)->withInput();
        }

        $type = Type::where('id', $id)->first();
        if ($type!= NULL) {
            $type->type = $request->input('type');
            $type->save();
            return redirect()->back()->with('success', 'Type mis à jour avec succès !');
        }
    }

    public function deleteType($id){
        $type = Type::where('id', $id)->first();
        if ($type!= NULL) {
            $type->delete();
            return redirect()->back()->with('success', 'Type supprimé avec succès !');
        }
    }
}
