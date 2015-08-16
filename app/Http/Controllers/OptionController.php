<?php

namespace qFuturo\Http\Controllers;

use Request;

use qFuturo\Option;
use qFuturo\Http\Requests;
use qFuturo\Http\Controllers\Controller;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $options= Option::latest()->get();
        return view('options.index',compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('options.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\CreateOptionRequest $request)
    {
        
        Option::create($request->all());
        return redirect('option');     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
        $option = Option::where(['codigo'=>$id])->firstOrFail();
        //dd($option);
        return view('options.show',compact('option'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $option = Article::where(['codigo'=>$id])->firstOrFail();
        return view('options.edit')
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
