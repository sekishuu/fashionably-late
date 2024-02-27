<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
        public function index()
    {
        $authors = Author::Paginate(7)->onEachSide(5);
        return view('admin', ['authors' => $authors]);
    }
}
