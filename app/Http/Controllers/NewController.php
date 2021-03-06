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
    public function store(Request $request){
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back();
    }
    public function get_client($id){
        $client = Post::find($id);
        if($client == null)
        return response(['message' => 'client not found'],404);

        return view('client.detail')->with(['client' => $client]);
    }
}
