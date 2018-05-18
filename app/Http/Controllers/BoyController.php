<?php

namespace App\Http\Controllers;

use App\Boy;
use Illuminate\Http\Request;

class BoyController extends Controller
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
        return view ('boys.create');
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

        $boy = new Boy;

        $image = $request->image;

        $image_new_name = time() . $image->getClientOriginalName();

        $image->move('uploads/images/boys', $image_new_name);


        $boy->name = $request->name;
        $boy->price = $request->price;
        $boy->image = 'uploads/images/boys/' . $image_new_name;
        $boy->description = $request->description;

        $boy->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boy  $boy
     * @return \Illuminate\Http\Response
     */
    public function show(Boy $boy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boy  $boy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boy = Boy::find($id);
        return view('boys.edit')->with('boy', $boy);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boy  $boy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'        => 'required',
            'price'       => 'required',
            'description' => 'required',
        ]);

        $boy = Boy::find($id);

        if($request->hasFile('image'))
        {
            $image = $request->image;
            $image_new_name = time() .$image->getClientOriginalName();
            $image->move('uploads/images/boys', $image_new_name);

            $boy->image = 'uploads/images/boys/' .$image_new_name;

            $boy->save();
        }

        $boy->name        = $request->name;
        $boy->description = $request->description;
        $boy->price       = $request->price;

        $boy->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boy  $boy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boy $boy)
    {
        //
    }
}
