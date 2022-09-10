<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Illuminate\Support\Facades\Session;

class crudcontroller extends Controller
{
    public function showdata()
    {
        return view('showdata');

    }
    public function add_data()
    {
        return view('add_data');

    }
    public function storeData(Request $request)
    {
        $valid = [
            'name' => 'required|max:10',
            'phone' => 'required',
            'email' => 'required|email',

        ];

        $this->validate($request, $valid);

        $crud = new Crud();
        $crud->name = $request->name;
        $crud->phone = $request->phone;
        $crud->email = $request->email;
        $crud->save();
        Session::flash('msg', "data added successfuly");



        return redirect()->back();



    }

}
