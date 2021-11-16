<?php

namespace App\Http\Controllers;

use App\Models\Donhang;
use Illuminate\Http\Request;

class DonhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $donhang = Donhang::where('user_id', $id)->get();
        return $donhang;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function show(Donhang $donhang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function edit(Donhang $donhang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donhang $donhang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donhang $donhang)
    {
        //
    }
}
