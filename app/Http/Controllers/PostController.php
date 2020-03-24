<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $instance=post::all();
        
        return view('post.post',['instance'=>$instance]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function formvalidation($request){
        $formvalidation=$request->validate([
            'title'=>'required',
            'post'=>'required'
        ]);
    }
    public function store(Request $request)
    {
        $this->formvalidation($request);
        //
       
        $instance=new post();
        $instance->title=request('title');
        $instance->post=request('post');
        $instance->save();
        return redirect('/post'); 
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
        $instance=post::find($id);
        return view('post.update',['instance'=>$instance]);
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
        $this->formvalidation($request);
        //
        $instance=post::find($id);
        $instance->title= $request->title; request('title');
        $instance->post=request('post');
        $instance->save();
        return redirect('/post'); 

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
