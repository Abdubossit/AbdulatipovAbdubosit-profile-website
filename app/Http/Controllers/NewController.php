<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;    

class NewController extends Controller
{
    public function index(){
        $clients = Post::all();
        
        return view('client.index')->with(['clients'=> $clients]);

    }
}
