<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InmuebleCobro;
use App\Inmueble;

class InmuebleCobroController extends Controller
{

    /*public function __construct(){
      $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $reporte = Inmueble::findOrFail($id);
        return view('cobros.create', [
          'reporte' => $reporte
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $validData = $request->validate([
        'mes' => 'required',
        'descripcion' => 'required',
        'monto' => 'required|numeric'
      ]);

      $reporte = new InmuebleCobro();
      $reporte->inmueble_id = $request->get('inmueble_id');
      $reporte->mes = $validData['mes'];
      $reporte->descripcion = $validData['descripcion'];
      $reporte->monto = $validData['monto'];
      $reporte->mora = (1*$reporte->monto)/100;
      $reporte->save();

      return redirect('/reporte_inmuebles/'.$request->get('inmueble_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id1,$id2)
    {
        $reporteI = Inmueble::findOrFail($id1);
        $reporteC = InmuebleCobro::findOrFail($id2);
        return view('cobros.edit', [
          'reporteI' => $reporteI,
          'reporteC' => $reporteC
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id1,$id2)
    {
      $validData = $request->validate([
        'mes' => 'required',
        'descripcion' => 'required',
        'monto' => 'required|numeric'
      ]);
      
      $reporte = InmuebleCobro::findOrFail($id2);
      $reporte->mes = $validData['mes'];
      $reporte->descripcion = $validData['descripcion'];
      $reporte->monto = $validData['monto'];
      $reporte->mora = (1*$reporte->monto)/100;
      $reporte->save();

      return redirect('/reporte_inmuebles/'.$request->get('inmueble_id'));
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
