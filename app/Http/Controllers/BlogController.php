<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index(){
        return view('addblog');
    }

    public function store(Request $request)
    {
        $messages = [
            'title.required' => 'Le titre est obligatoire',
            'content.required' => 'Le contenu est obligatoire',
            'media.required' => 'Le média est requis.',
        ];
        
        $validateData = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'media' => 'required',
        ],$messages);

        if ($validateData->fails()) {
        
            return redirect()->back()->withErrors($validateData)->withInput();
        }
        $blog = Blog::create([
            'title' => $request->title,
            'description' => $request->content,
            'user_id' => Auth::id(),
           'media' => $request->media,
        ]);
        if($blog != NULL){
            return redirect()->back()->with('success', 'blog ajouté avec succès !');

        }
        else {
            return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de l\'ajout de blog.']);
        }

    }
    
}
