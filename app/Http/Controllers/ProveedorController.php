<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('proveedores.index', [
        'proveedores' => Proveedor::all()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
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
          'empresa' => 'required|min:3',
          'producto_servicio' => 'required|min:3',
          'contacto' => 'required|min:3',
          'telefono' => 'required|numeric',
          'direccion' => 'required|min:3',
          'email' => 'required|min:3'
        ]);
        $proveedor = new Proveedor();
        $proveedor->empresa = $validData['empresa'];
        $proveedor->producto_servicio = $validData['producto_servicio'];
        $proveedor->contacto = $validData['contacto'];
        $proveedor->telefono = $validData['telefono'];
        $proveedor->direccion = $validData['direccion'];
        $proveedor->email = $validData['email'];
        $proveedor->save();

        return redirect('/reporte_proveedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reporte = Proveedor::findOrFail($id);
        return view('proveedores.show', [
          'reporte' => $reporte
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
      $proveedor = Proveedor::findOrFail($id);
      return view('proveedores.edit', [
        'proveedor' => $proveedor
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
          'empresa' => 'required|min:3',
          'producto_servicio' => 'required|min:3',
          'contacto' => 'required|min:3',
          'telefono' => 'required|numeric',
          'direccion' => 'required|min:3',
          'email' => 'required|min:3'
        ]);
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->empresa = $validData['empresa'];
        $proveedor->producto_servicio = $validData['producto_servicio'];
        $proveedor->contacto = $validData['contacto'];
        $proveedor->telefono = $validData['telefono'];
        $proveedor->direccion = $validData['direccion'];
        $proveedor->email = $validData['email'];
        $proveedor->save();

        return redirect('/reporte_proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return redirect('/reporte_proveedores');
    }
}
