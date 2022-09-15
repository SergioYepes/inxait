<?php

namespace App\Http\Controllers;

use App\Models\ganador;
use App\Models\concursantes;
use Illuminate\Http\Request;

class GanadorController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post["concursantes"]=Concursantes::get();
        $pest=count($post["concursantes"],COUNT_RECURSIVE);
        if($pest>=5){
            $post["concursantes"]=Concursantes::orderByRaw("RAND()")->limit(1)
            ->get();  
        }
        else{
            $post["concursantes"]=[];
        }

        $datos["ganador_sorteos"]=ganador::paginate(5);
        return view('ganador_sorteos.index',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $post=Concursantes::orderByRaw("RAND()")->limit(1)
        ->get();
        dd($post);
        return view('ganador_sorteos.create');
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


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ganador  $ganador
     * @return \Illuminate\Http\Response
     */
    public function show(ganador $ganador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ganador  $ganador
     * @return \Illuminate\Http\Response
     */
    public function edit(ganador $ganador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ganador  $ganador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ganador $ganador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ganador  $ganador
     * @return \Illuminate\Http\Response
     */
    public function destroy(ganador $ganador)
    {
        //
    }
}
