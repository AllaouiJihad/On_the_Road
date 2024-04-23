<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Guide;
use App\Models\User;
use App\Models\Voyage;
use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
    public function index(){
        $guides = Guide::count();
        $users = User::where('role_id', '=', 2)->count();
        $voyages = Voyage::count();
        $destination = Destination::count();

        return view('statistique',compact('guides','users','voyages','destination'));
    }
}
