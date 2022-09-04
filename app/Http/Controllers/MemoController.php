<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('memo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function show(Memo $memo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function edit(Memo $memo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Memo $memo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Memo  $memo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memo $memo)
    {
        //
    }
}
