<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getHome()
    {
        $user = \Auth::user();
        $ukms = $user->ukms();
        return view('user.home')
            ->withUser(\Auth::user())
            ->withUkms($ukms);
    }
}
