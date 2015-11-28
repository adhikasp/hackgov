<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    public function getHome()
    {
        $ukms = \App\Model\Ukm\Ukm::all()->take(8);
        return view('landing2')
            ->withUkms($ukms);
    }

    public function store()
    {
        $products = \App\Model\Ukm\Product::with('ukm')->get()->take(13);
        return view('belanja')
            ->withProducts($products);
    }
}
