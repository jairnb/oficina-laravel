<?php

namespace App\Http\Controllers;

use App\Peca;
use Illuminate\Http\Request;

class PecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pecas = Peca::latest('created_at')->get();
        return view('sistema.peca.index', compact('pecas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sistema.peca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Peca::create($data);
        return redirect('peca');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peca  $peca
     * @return \Illuminate\Http\Response
     */
    public function show(Peca $peca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peca  $peca
     * @return \Illuminate\Http\Response
     */
    public function edit(Peca $peca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peca  $peca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peca $peca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peca  $peca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peca $peca)
    {
        //
    }
}
