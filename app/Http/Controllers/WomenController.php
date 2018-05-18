<?php

namespace App\Http\Controllers;

use App\Women;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('women.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'price'       => 'required',
            'description' => 'required',
            'image'       => 'required|image'
        ]);

        $women_product = new Women;

        $image = $request->image;

        $image_new_name = time() . $image->getClientOriginalName();

        $image->move('uploads/images/women', $image_new_name);


        $women_product->name = $request->name;
        $women_product->price = $request->price;
        $women_product->image = 'uploads/images/women/' . $image_new_name;
        $women_product->description = $request->description;

        $women_product->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function show(Women $women)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $women_product = Women::find($id);
        return view('women.edit')->with('women_product', $women_product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'        => 'required',
            'price'       => 'required',
            'description' => 'required',
        ]);

        $women_product = Women::find($id);

        if($request->hasFile('image'))
        {
            $image = $request->image;
            $image_new_name = time() .$image->getClientOriginalName();
            $image->move('uploads/images/women', $image_new_name);

            $women_product->image = 'uploads/images/women/' .$image_new_name;

            $women_product->save();
        }

        $women_product->name        = $request->name;
        $women_product->description = $request->description;
        $women_product->price       = $request->price;

        $women_product->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Women  $women
     * @return \Illuminate\Http\Response
     */
    public function destroy(Women $women)
    {
        //
    }
}
