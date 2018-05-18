<?php

namespace App\Http\Controllers;

use App\Girl;
use App\Men;
use App\Women;
use App\Boy;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function menIndex()
    {
        return view('men.index')
              ->with('first_post', Men::orderBy('created_at', 'desc')->first())
            ->with('second_post', Men::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Men::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('forth_post', Men::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
            ->with('fifth_post', Men::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
            ->with('sixth_post', Men::orderBy('created_at', 'desc')->skip(5)->take(1)->get()->first());
    }

    public function menProduct($id)
    {
        $men_product = Men::find($id);

        return view('men.single')->with('men_product', $men_product);

    }

    public function womenIndex()
    {
        return view('women.index')
            ->with('first_post', Women::orderBy('created_at', 'desc')->first())
            ->with('second_post', Women::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Women::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('forth_post', Women::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
            ->with('fifth_post', Women::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
            ->with('sixth_post', Women::orderBy('created_at', 'desc')->skip(5)->take(1)->get()->first());
    }

    public function womenProduct($id)
    {
        $women_product = Women::find($id);

        return view('women.single')->with('women_product', $women_product);

    }

    public function boysIndex()
    {
        return view('boys.index')
            ->with('first_post', Boy::orderBy('created_at', 'desc')->first())
            ->with('second_post', Boy::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Boy::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('forth_post', Boy::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
            ->with('fifth_post', Boy::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
            ->with('sixth_post', Boy::orderBy('created_at', 'desc')->skip(5)->take(1)->get()->first());
    }

    public function boysProduct($id)
    {
        $boy_product = Boy::find($id);

        return view('boys.single')->with('boy_product', $boy_product);
    }

    public function girlsIndex()
    {
        return view('girls.index')
            ->with('first_post', Girl::orderBy('created_at', 'desc')->first())
            ->with('second_post', Girl::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Girl::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('forth_post', Girl::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
            ->with('fifth_post', Girl::orderBy('created_at', 'desc')->skip(4)->take(1)->get()->first())
            ->with('sixth_post', Girl::orderBy('created_at', 'desc')->skip(5)->take(1)->get()->first());
    }

    public function girlsProduct($id)
    {
        $girl_product = Girl::find($id);

        return view('girls.single')->with('girl_product', $girl_product);
    }
}
