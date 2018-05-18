<?php

namespace App\Http\Controllers;

use App\Men;
use Illuminate\Http\Request;

class MenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('men.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('men.create');
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

        $men = new Men;

        $image = $request->image;

        $image_new_name = time() . $image->getClientOriginalName();

        $image->move('uploads/images/men', $image_new_name);


        $men->name = $request->name;
        $men->price = $request->price;
        $men->image = 'uploads/images/men/' . $image_new_name;
        $men->description = $request->description;

        $men->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function show(Men $men)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $men = Men::find($id);
        return view('men.edit')->with('men', $men);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'        => 'required',
            'price'       => 'required',
            'description' => 'required',
        ]);

        $men = Men::find($id);

        if($request->hasFile('image'))
        {
            $image = $request->image;
            $image_new_name = time() .$image->getClientOriginalName();
            $image->move('uploads/images/men', $image_new_name);

            $men->image = 'uploads/images/men/' .$image_new_name;

            $men->save();
        }

        $men->name        = $request->name;
        $men->description = $request->description;
        $men->price       = $request->price;

        $men->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Men  $men
     * @return \Illuminate\Http\Response
     */
    public function destroy(Men $men)
    {
        //
    }
}
