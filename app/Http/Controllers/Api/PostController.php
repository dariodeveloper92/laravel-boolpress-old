<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Esempio */
        // return response()->json([
        //     'name' => 'Dario',
        //     'state' => 'Italy'
        // ]);

        /* Mi restituisce tutti i posts*/
        $posts = Post::all();
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
}