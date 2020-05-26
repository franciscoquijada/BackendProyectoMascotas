<?php

namespace App\Http\Controllers\APIControllers;

use App\Mascotas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MascotasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Mascotas::all();

        return response($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'nombre'=>'required', 'raza'=>'required', 'edad'=>'required']);
        $response = Mascotas::create($request->all());
        
        return response($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mascotas_id)
    {
        $this->validate($request,[ 'nombre'=>'required', 'raza'=>'required', 'edad'=>'required']);
        $response = Mascotas::find($mascotas_id)->update($request->all());
        if($response)
            $response = ['message' => 'Updated correctly'];
        else
            $response = ['message' => 'error'];
        
        return response($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function destroy($mascotas_id)
    {
        $result = Mascotas::find($mascotas_id)->delete();
        if($result)
            $response = ['message' => 'Deleted correctly'];
        else
            $response = ['message' => 'error'];
        return response($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($idMascota)
    {
        $result = Mascotas::select('id', 'nombre', 'raza', 'edad')->where('id', $idMascota)->get();
        return $result;
    }
}
