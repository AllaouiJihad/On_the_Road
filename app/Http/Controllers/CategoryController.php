<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
   public function showCategories(){
    $categories = category::all();
    return view('categories', compact('categories'));
   }

   public function addCategory(Request $request){
    $messages = [
        'category.required' => 'La category est requis.',
    ];
    $validateData = Validator::make($request->all(), [
        'category' => 'required|string'
    ],$messages);
    
    if ($validateData->fails()) {
        
        return redirect()->back()->withErrors($validateData)->withInput();
    }
    
    $category = category::create([
        'category' => $request->input('category'),
    ]);
    if ($category!= NULL) {
        return redirect()->back()->with('success', 'category ajouté avec succès !');
    } else {
        return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de l\'ajout de la category.']);
    }
}


public function updateCategory(Request $request, $id){
    
    $messages = [
        'category.required' => 'Le category est requis.',
    ];
    $validateData = Validator::make($request->all(), [
        'category' => 'required|string'
    ],$messages);
    if ($validateData->fails()) {
        
        return redirect()->back()->withErrors($validateData)->withInput();
    }

    $category = category::where('id', $id)->first();
    if ($category!= NULL) {
        $category->category = $request->input('category');
        $category->save();
        return redirect()->back()->with('success', 'category mis à jour avec succès !');
    }
}

public function deleteCategory($id){
    $category = category::where('id', $id)->first();
    if ($category!= NULL) {
        $category->delete();
        return redirect()->back()->with('success', 'category supprimé avec succès !');
    }
}
}
