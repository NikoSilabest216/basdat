<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $data = Article::with('users')->get();
        return view('welcome', ['data' => $data]);
    }
}
