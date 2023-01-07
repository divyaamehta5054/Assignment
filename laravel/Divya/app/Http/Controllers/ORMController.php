<?php

namespace App\Http\Controllers;

use App\Models\ORM;
use Illuminate\Http\Request;

class ORMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ORM::all();
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
        $p = new ORM;
        $p->name="whatever";
        $p->email="whatever@mail.com";
        $p->save(); //for save data in databse 
        return ORM::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ORM  $oRM
     * @return \Illuminate\Http\Response
     */
    public function show(ORM $oRM)
    {
        return ORM::where('id',1)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ORM  $oRM
     * @return \Illuminate\Http\Response
     */
    public function edit(ORM $oRM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ORM  $oRM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ORM $oRM)
    {
        $p = ORM::find(2);
        $p->name="priyaan";
        $p->email="priyaan@mail.com";
        $p->save(); //for save data in databse 
        return ORM::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ORM  $oRM
     * @return \Illuminate\Http\Response
     */
    public function destroy(ORM $oRM)
    {
        $p = ORM::where('id',1)->delete();
        return ORM::all();
    }
}