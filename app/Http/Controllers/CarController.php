<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return response()->json([
            'data' => $cars,
            'status'=>Response::HTTP_OK
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = Car::create($request->all());
        return response()->json([
            'message' => 'el carro se registro Correctamente',
            'data' => $car,
            'status' => Response::HTTP_CREATED
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return response()->json([
            'message' => 'Se encontro el Automovil',
            'data' => $car,
            'status' => Response::HTTP_OK
        ] ,Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return response()->json([
            'message' =>'se actualizar el Automoil',
            'data'=> $car,
            'status' => Response::HTTP_OK
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return response()->json([
            'message' =>'se elimino el Automoil',
            'data'=> $car,
            'status' => Response::HTTP_OK
        ],Response::HTTP_OK);
    }
}
