<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookmarks extends Controller
{
    //
    public function index()
    {
        return json([
            'hello' => 'world',
        ]);
    }
}
