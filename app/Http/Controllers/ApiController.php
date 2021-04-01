<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiController extends Controller
{
    //
    public function index(Request $request){
        $clients = Post::all();
        return response($clients,200);
    }

    public function get_client(Request $request){
        $client = Post::find($request->post_id);

        if($client == null){
            return response(['message' => 'There is no post'],404);
        }
        return response($client,200);
    }
}
