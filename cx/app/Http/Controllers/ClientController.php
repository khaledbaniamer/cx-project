<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //

    function index(){
       return redirect('/client');
    }

    function add(Request $request){

        $request->validate([
            'branch' => 'required',
            'name' => 'required',
            'birth_date' => 'required',
            'start_date' => 'required',
            'profession' => 'required',
            'country' => 'required',
            'contact_detials' => 'required',
            // 'company_id' => 'required',

        ]);

        $query = Client::insert([

            'branch' => $request->input('branch'),
            'name' => $request->input('name'),
            'birth_date' => $request->input('birth_date'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'profession' => $request->input('profession'),
            'country' => $request->input('country'),
            'contact_detials' => $request->input('contact_detials'),
            'company_id' => $request->input('company_id'),

        ]);


        if ($query) {
            
            return back()->with('success', 'data added successfully');
        } else {
            return back()->with('fail', 'data not save');
        }
    }
    
}
