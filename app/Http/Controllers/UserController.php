<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function notifications()
    {
        auth()->user()->unreadNotifications->MarkAsRead();
        return view('users.notifications', [

            'notifications' => auth()->user()->notifications()->paginate(5)
        ]);
    }
}
