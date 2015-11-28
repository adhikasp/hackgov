<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function getHome()
    {
        $ukms = \App\Model\Ukm\Ukm::all();
        return view('landing')
            ->withUkms($ukms);
    }
}
