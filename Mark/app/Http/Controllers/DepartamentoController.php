<?php

namespace App\Http\Controllers;

use App\departamento;
use App\pais;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{

    public function searchByCountry($id){
        $depto = departamento::where('idPais', $id)->get();
        $depto = $depto->makeVisible('id');
        return json_encode($depto);
    }

    var $rules = ['depto' => 'required|regex:/^[\pL\s\-]+$/u'];
    
    var $messages = ['depto.required' => 'El campo :attribute es requerido',
                      'depto.regex' => 'El campo :attribute debe contener solamente letras'  ];


    public function download()
    {

    }
    
    public function search(Request $request)
    {

    }

    public function delete($id)
    {
        $depto = departamento::with('pais')->find($id);
        
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"],['link'=>"/depto",'name'=>"Departamento"],['name'=>"Eliminar"]];
        
            return view('depto/del',compact('depto','id'), ['breadcrumbs' => $breadcrumbs]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['link'=>"/home",'name'=>"Home"],['name'=>"Departamentos"]];
    
        $depto = departamento::with('pais')->paginate(10);
        
        return view('/depto/index', compact('depto'), ['breadcrumbs' => $breadcrumbs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $breadcrumbs = [
            ['link'=>"/home",'name'=>"Home"],['name'=>"Nuevo Departamento"]];
    
        $pais = pais::all();
        
        return view('/depto/create', compact('pais'), ['breadcrumbs' => $breadcrumbs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules,$this->messages);

        $depto = new departamento();
        $depto->idpais = $request->pais;
        $depto->departamento = $request->depto;
        $depto->save();
        return redirect ('depto')->with('success', 'Departamento guardado');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $breadcrumbs = [
            ['link'=>"/home",'name'=>"Home"],['name'=>"Editar"]];
    
        $depto = departamento::find($id);
        

        $pais = pais::all();
        
        return view('/depto/edit', compact('id','depto','pais'), ['breadcrumbs' => $breadcrumbs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, $this->rules, $this->messages);

        $depto = departamento::find($id);
        $depto->departamento = $request->depto;
        $depto->save();
        return redirect('depto')->with('success','Guardado Satisfactoriamente')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depto = departamento::find($id);
        $depto->delete();
        return redirect('depto')->with('success','Eliminado Satisfactoriamente');
    }
}