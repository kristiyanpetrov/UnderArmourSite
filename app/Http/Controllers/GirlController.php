<?php

namespace App\Http\Controllers;

use App\Girl;
use Illuminate\Http\Request;

class GirlController extends Controller
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
        return view('girls.create');
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

        $girl = new Girl;

        $image = $request->image;

        $image_new_name = time() . $image->getClientOriginalName();

        $image->move('uploads/images/girls', $image_new_name);


        $girl->name = $request->name;
        $girl->price = $request->price;
        $girl->image = 'uploads/images/girls/' . $image_new_name;
        $girl->description = $request->description;

        $girl->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Girl  $girl
     * @return \Illuminate\Http\Response
     */
    public function show(Girl $girl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Girl  $girl
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $girl = Girl::find($id);
        return view('girls.edit')->with('girl', $girl);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Girl  $girl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'        => 'required',
            'price'       => 'required',
            'description' => 'required',
        ]);

        $girl = Girl::find($id);

        if($request->hasFile('image'))
        {
            $image = $request->image;
            $image_new_name = time() .$image->getClientOriginalName();
            $image->move('uploads/images/girls', $image_new_name);

            $girl->image = 'uploads/images/girls/' .$image_new_name;

            $girl->save();
        }

        $girl->name        = $request->name;
        $girl->description = $request->description;
        $girl->price       = $request->price;

        $girl->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Girl  $girl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Girl $girl)
    {
        //
    }
}
