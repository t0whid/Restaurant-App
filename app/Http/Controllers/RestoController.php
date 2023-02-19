<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;

use Illuminate\Http\Request;

class RestoController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function list()
    {
        $data = Restaurant::all();
        return view('list', ["data" => $data]);
    }
    function add(Request $request)
    {
        //return $request->input();
        $resto = new Restaurant;
        $resto->name = $request->input('name');
        $resto->email = $request->input('email');
        $resto->address = $request->input('address');
        $resto->save();
        $request->session()->flush('status', 'Restaurent add successfully!');
        return redirect('list');
    }
}
