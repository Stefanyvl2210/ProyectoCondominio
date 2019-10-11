<?php

namespace App\Http\Controllers;

use App\Models\Cobro;
use App\Models\Inmueble;
use Illuminate\Http\Request;

class CobroController extends Controller
{

    private $meses = [
        'enero',
        'febrero',
        'marzo',
        'abril',
        'mayo',
        'junio',
        'julio',
        'agosto',
        'septiembre',
        'octubre',
        'noviembre',
        'diciembre'
    ];

    /**
     * Display a listing of the resource.
     *
     * @param Inmueble $inmueble
     * @param null $mes
     * @return void
     */
    public function index(Inmueble $inmueble, $mes = null)
    {
        $cobros = null;
        if ($mes) {
            $cobros = $inmueble->cobros()->where('mes', $mes)->get();
        } else {
            $cobros = $inmueble->cobros;
        }

        return view('cobros.index', [
            'inmueble' => $inmueble,
            'actualMes' => $mes,
            'cobros' => $cobros,
            'meses' => $this->meses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Inmueble $inmueble
     * @return \Illuminate\Http\Response
     */
    public function create(Inmueble $inmueble)
    {
        return view('cobros.create', [
            'inmueble' => $inmueble,
            'meses' => $this->meses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validData = $request->validate([
            'mes' => 'required',
            'descripcion' => 'required',
            'monto' => 'required|numeric'
        ]);

        $inmueble = Inmueble::find($id);

        $inmueble->cobros()->create(
            array_merge(
                $request->all(),
                [
                    'mora' => (1 * $request->monto) / 100
                ]
            )
        );

        return redirect()->route('cobros.index', ['inmueble' => $inmueble->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Inmueble $inmueble
     * @param $mes
     * @return \Illuminate\Http\Response
     */
    public function show(Inmueble $inmueble, $mes = null)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Inmueble $inmueble
     * @param Cobro $cobro
     * @return \Illuminate\Http\Response
     */
    public function edit(Inmueble $inmueble, Cobro $cobro)
    {
        return view('cobros.edit', [
            'inmueble' => $inmueble,
            'cobro' => $cobro,
            'meses' => $this->meses
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Inmueble $inmueble
     * @param Cobro $cobro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inmueble $inmueble, Cobro $cobro)
    {
        $validData = $request->validate([
            'mes' => 'required',
            'descripcion' => 'required',
            'monto' => 'required|numeric'
        ]);

        $cobro->update(array_merge($request->all(), [
            'mora' => (1 * $request->monto) / 100
        ]));

        return redirect()->route('cobros.index', ['inmueble' => $inmueble->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
