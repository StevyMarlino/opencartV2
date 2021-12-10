<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        if(auth()->user()->hasRole('seller'))
            return view('admin.index');

        return redirect()->back();
    }

    public function show($slug)
    {


    }
}
