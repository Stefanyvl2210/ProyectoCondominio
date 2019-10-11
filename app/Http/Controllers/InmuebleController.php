<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inmueble.index', [
            'inmuebles' => Inmueble::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inmueble.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'tipo'=> 'required',
            'alicuota' => 'required|numeric',
        ]);

        Inmueble::create($request->all());

        return redirect()->route('inmueble.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('inmueble.edit', [
            'inmueble' => Inmueble::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validData = $request->validate([
            'tipo'=> 'required',
        ]);
        Inmueble::findOrFail($id)
            ->update($request->all());

        return redirect()->route('inmueble.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Inmueble $inmueble
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Inmueble $inmueble)
    {
        $inmueble->delete();
        return redirect()->route('inmueble.index');
    }

}
