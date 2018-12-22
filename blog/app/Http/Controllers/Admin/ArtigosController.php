<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaBreadcrumbs = json_encode([
            ["titulo"=>"Home","url"=>route('home')],
            ["titulo"=>"Listagem de Artigos","url"=>""]
        ]);
     /** 
     * Enviando Dados para a View 
     */
        $listaArtigos = json_encode([
            ["id"=>1,"titulo"=>"Programação com Laravel","descricao"=>"Blog Utilizando VueJS",
            "author"=>"Eduardo Alexandre","data"=>"24/12/18"],

            ["id"=>2,"titulo"=>"Programação com Reactl","descricao"=>"Blog Utilizando Javascript",
            "author"=>"Eduardo Alexandre","data"=>"24/12/19"]
        ]);

             return view('admin.artigos.index',compact('listaBreadcrumbs','listaArtigos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        //
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
        //
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