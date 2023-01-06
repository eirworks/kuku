<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function redir($uid) {
        $link = Link::where('uid', $uid)->first();

        if ($link) {
            return redirect($link->url);
        }

        return response("URL Not found: ".$uid, 404);
    }
}
