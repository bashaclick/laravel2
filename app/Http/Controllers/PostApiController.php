<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Storage;


class PostApiController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $json = Storage::disk('local')->get('landscapes.json');
        $json = json_decode($json, true);
        
        return response()->json($json, 200); 
    }
}
