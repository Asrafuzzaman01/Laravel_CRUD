<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Illuminate\Support\Facades\Session;

class crudcontroller extends Controller
{
    public function showdata()
    {
        // $showdata = Crud::all();
        $showdata = Crud::simplePaginate(6);
        return view('showdata', compact('showdata'));

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



        return redirect('/');



    }
    public function editedata($id = null)
    {
        $editedata = Crud::find($id);

        return view('editedata', compact('editedata'));


    }
    public function deletedata($id = null)
    {
        $deletedata = crud::find($id);
        $deletedata->delete();
        Session::flash('msg', "data delete successfuly");

        return redirect('/');


    }



}
