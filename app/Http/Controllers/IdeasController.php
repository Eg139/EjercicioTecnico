<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

class IdeasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['ideas'] = Ideas::paginate(5);
        return view('ideas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ideas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $campos = [
            'Text' =>'required|string|100',
            'Impact' =>'required|integer|10',
            'Ease' =>'required|integer|10',
            'Confidence' =>'required|integer|10',
            'Avg' =>'required|float|10',
        ];
        $mensaje =[
            'required' => 'El :attribute re requerido'
        ];

        $this->validate($request,$campos,$mensaje);*/

        $datosIdeas = request()->except('_token');
        Ideas::insert($datosIdeas);

        //return response()->json($datosIdeas);
        return redirect('ideas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ideas  $ideas
     * @return \Illuminate\Http\Response
     */
    public function show(Ideas $ideas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ideas  $ideas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idea = Ideas::findOrFail($id);
        
        return view('ideas.edit', compact('idea'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ideas  $ideas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosIdeas = request()->except('_token','_method');
        Ideas::where('id','=',$id)->update($datosIdeas);

        $idea = Ideas::findOrFail($id);
        //return view('ideas.edit', compact('idea'));
        return redirect('ideas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ideas  $ideas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ideas::destroy($id);
        return redirect('ideas');
    }
}
