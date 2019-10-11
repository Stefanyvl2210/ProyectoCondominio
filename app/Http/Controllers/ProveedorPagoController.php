<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProveedorPago;
use App\Proveedor;

class ProveedorPagoController extends Controller
{
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
        $reporte = Proveedor::findOrFail($id);
        return view('pagos.create', [
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

      $reporte = new ProveedorPago();
      $reporte->proveedor_id = $request->get('proveedor_id');
      $reporte->mes = $validData['mes'];
      $reporte->descripcion = $validData['descripcion'];
      $reporte->monto = $validData['monto'];
      $reporte->save();

      return redirect('/reporte_proveedores/'.$request->get('proveedor_id'));
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
        $reporteProv = Proveedor::findOrFail($id1);
        $reportePago = ProveedorPago::findOrFail($id2);
        return view('pagos.edit', [
          'reporteProv' => $reporteProv,
          'reportePago' => $reportePago
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id1, $id2)
    {
        $validData = $request->validate([
          'mes' => 'required',
          'descripcion' => 'required',
          'monto' => 'required|numeric'
        ]);

        $reporte = ProveedorPago::findOrFail($id2);
        $reporte->mes = $validData['mes'];
        $reporte->descripcion = $validData['descripcion'];
        $reporte->monto = $validData['monto'];
        $reporte->save();

        return redirect('/reporte_proveedores/'.$request->get('proveedor_id'));
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
