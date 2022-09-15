<?php

namespace App\Http\Controllers;

use App\Models\concursantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


use function PHPSTORM_META\map;

class ConcursantesController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post["concursantes"]=Concursantes::where("id",">=","5")
        ->orderByRaw("RAND()")->limit(1)
        ->get();
        $datos["concursantes"]=Concursantes::get();
        return view("concursantes.index",$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $post=Http::get("https://raw.githubusercontent.com/marcovega/colombia-json/master/colombia.min.json")->json();
        

        return view("concursantes.create",["post"=>$post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos=[
            "nombre"=>"required|string|max:100",
            "apellido"=>"required|string|max:100",
            "cedula"=>"required|integer",
            "celular"=>"required|integer",
            "correo"=>"required|email",
            "habeas_data"=>"required",
        ];
        $mensaje=[
            "required"=>"El :attribute no tiene dato",
        ];
        $this->validate($request,$campos,$mensaje);
        
        $datosCon=request()->except("_token");
        Concursantes::insert($datosCon);
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\concursantes  $concursantes
     * @return \Illuminate\Http\Response
     */
    public function show(concursantes $concursantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\concursantes  $concursantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post=Http::get("https://raw.githubusercontent.com/marcovega/colombia-json/master/colombia.min.json")->json();

        $concursante=Concursantes::findOrFail($id);
        return view("concursantes.edit",["post"=>$post], compact("concursante"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\concursantes  $concursantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos=[
            "nombre"=>"required|string|max:100",
            "apellido"=>"required|string|max:100",
            "cedula"=>"required|integer",
            "celular"=>"required|integer",
            "correo"=>"required|email",
            "habeas_data"=>"required",
        ];
        $mensaje=[
            "required"=>"El :attribute no tiene dato",
        ];
        $this->validate($request,$campos,$mensaje);
        $datosCon=request()->except("_token");
        Concursantes::where("id","=",$id)->update($datosCon);
        $concursante=Concursantes::findOrFail($id);
        return redirect("concursantes")->with("mensaje", "Concursante Modificado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\concursantes  $concursantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $concursante=Concursantes::findOrFail($id);
  
           Concursantes::destroy($id);

        return redirect("concursantes")->with("mensaje", "Concursante Eliminado");
    }
}
