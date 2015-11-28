<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ukms = \App\Model\Ukm\Ukm::all();
        return view('ukm.jelajah')
            ->withUkms($ukms);
    }

    public function search($name)
    {
        $ukms = \App\Model\Ukm\Ukm::name($name)->get();
        if ($ukms->isEmpty()) {
            $ukms = null;
        }
        return view('ukm.search')
            ->withUkms($ukms)
            ->withKeyword($name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ukm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ukm = \App\Model\Ukm\Ukm::create([
            'name' => $request->name,
            'category' => $request->category,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'user_id' => \Auth::user()->id
        ]);
        return redirect()->route('ukm.show', [$ukm->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'ukm dengan id : ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
