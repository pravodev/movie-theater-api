<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Model class
     */
    protected $model = null;

    /**
     *  
     */
    protected $resource = null;

    public function getModel()
    {
        return new $this->model;
    }
    
    public function getResource()
    {
        return $this->resource;
    }

    public function rules()
    {
        return [];
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->getResource()::collection($this->getModel()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules());
        if(method_exists($this->model, 'createData')){
            $model = $this->model::createData($request->all());
        }else{
            $model = new $this->model;
            $attributes = $request->only($model->getFillable());
            $model->fill($attributes);
            $model->save();
        }
        $classResource = $this->getResource();

        return new $classResource($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = $this->getModel()->findOrFail($id);
        $classResource = $this->getResource();
        return new $classResource($model);
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
