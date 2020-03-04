<?php

namespace App\Http\Controllers;

use App\Bookmark;
use Illuminate\Http\Request;

class BookmarksController extends Controller
{
    //
    public function index()
    {
        return json([
            'hello' => 'world',
        ]);
    }

    public function create(Request $req)
    {
        // var_dump($req->input('title'));
        // var_dump($req->input('url'));
        // die;
        $user = $req->user();
        $bookmark = new Bookmark([
            'title' => $req->input('title'),
            'url' => $req->input('url'),
            // 'user' => $user,
        ]);
        $result = $user->bookmarks()->save($bookmark);
        return response()->json([
            'result' => $result,
        ]);
    }
}
