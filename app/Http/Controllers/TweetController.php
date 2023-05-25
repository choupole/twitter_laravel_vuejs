<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TweetController extends Controller
{
    public function index()
    {
        // ici on passe nos user qui sont en rélation
        $tweets = Tweet::with('user')->orderBy('created_at', 'DESC')->get();
        // pour renvoyer un vue avec vue.JS on utilise Inertia mais avec blade on utilise view
        return Inertia::render('Tweets/index', [
            'tweets' => $tweets,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => ['required', 'max:280'],
            'user_id' => ['exists:users, id'],
        ]);
    }
}
