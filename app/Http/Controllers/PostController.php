<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Storage;


class PostController extends Controller
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
        $name = $json['name'];
        $email = $json['email']; 
        $phone = $json['phone']; 
        $bio = $json['bio']; 
        $profile_picture = $json['profile_picture']; 
        $posts = $json['album']; 

        return view('welcome', compact('name', 'email', 'phone', 'bio', 'profile_picture', 'posts'));
    }
}
