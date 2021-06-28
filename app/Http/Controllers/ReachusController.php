<?php

namespace App\Http\Controllers;

use App\reachus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReachusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reachsus = reachus::orderBy('created_at', 'desc')->get();
        return view('reachus.index', compact('reachsus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reachus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        //create req
        $reachsus = new reachus;
        $reachsus->name = $request->input('name');
        $reachsus->company = $request->input('company');
        $reachsus->phone = $request->input('phone');
        $reachsus->email = $request->input('email');
        $reachsus->time = $request->input('time');
        $reachsus->date = $request->input('date');
        $reachsus->desc = $request->input('desc');
        $reachsus->save();

        return redirect('reachus/create')->with('Success',"Permintaan Baru Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reachus  $reachus
     * @return \Illuminate\Http\Response
     */
    public function show(reachus $reachus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reachus  $reachus
     * @return \Illuminate\Http\Response
     */
    public function edit(reachus $reachus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reachus  $reachus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reachus $reachus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reachus  $reachus
     * @return \Illuminate\Http\Response
     */
    public function destroy(reachus $reachus)
    {
        //
    }
}
