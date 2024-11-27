<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Replay;
use Illuminate\Support\Facades\Auth;

class ReplayController extends Controller
{
    public function store($comment_id,Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $id_user = Auth::id();

        $reply = new Replay;

        $reply->content = $request->input('content');
        $reply->user_id = $id_user;
        $reply->comment_id = $comment_id;

        $reply->save();

        return Redirect()->back()->with('success','Reply Berhasil di Tambahkan');

    }
}
