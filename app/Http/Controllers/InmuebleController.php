<?php

namespace App\Http\Controllers;

use App\Inmueble;
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
        return view('reporteInmuebles.index', [
          'reporteInmuebles' => Inmueble::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reporteInmuebles.create');
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
          'alicuota' => 'required|numeric',
          'monto_reserva' => 'required|numeric',
          'pago' => 'required|numeric'
        ]);

        $reporte = new Inmueble();
        $reporte->tipo = $request->get('tipo');
        $reporte->alicuota = $validData['alicuota'];
        $reporte->monto_reserva = $validData['monto_reserva'];
        $reporte->pago = $validData['pago'];
        $reporte->save();

        return redirect('/reporte_inmuebles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reporte = Inmueble::findOrFail($id);
        $mes = ['Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Septiembre',
                'Octubre',
                'Noviembre',
                'Diciembre'];
        return view('reporteInmuebles.show', [
          'reporte' => $reporte,
          'meses' => $mes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reporte = Inmueble::findOrFail($id);
        return view('reporteInmuebles.edit', [
          'reporte' => $reporte
        ]);
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
        $validData = $request->validate([
          'alicuota' => 'required|numeric',
          'monto_reserva' => 'required|numeric',
          'pago' => 'required|numeric'
        ]);
        $reporte = Inmueble::findOrFail($id);
        $reporte->tipo = $request->get('tipo');
        $reporte->alicuota = $validData['alicuota'];
        $reporte->monto_reserva = $validData['monto_reserva'];
        $reporte->pago = $validData['pago'];
        $reporte->save();
        return redirect('/reporte_inmuebles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reporte = Inmueble::findOrFail($id);
        $reporte->delete();
        return redirect('/reporte_inmuebles');
    }

}
