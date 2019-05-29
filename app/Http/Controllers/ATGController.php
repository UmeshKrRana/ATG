<?php

namespace App\Http\Controllers;

use App\ATG;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class ATGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('atg-landing');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('atg-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name'          =>      'required|regex:/^[a-zA-Z]+/|max:255',
            'email'         =>      'required|email|max:255|unique:users|regex:/^[a-zA-Z]+/',
            'pincode'       =>      'required|digits:6|integer',
        ]);

        $atgObj             =       new ATG();

        if (ATG::where('email', Input::get('email'))->exists()) {
            Session::flash('exist', "Whoops! E-mail already exists. Please try with different one.");
            return Redirect::back();
            exit();
        }
        else {
            $atgObj->name = request('name');
            $atgObj->email = request('email');
            $atgObj->pincode = request('pincode');
            $atgObj->save();
    
            Session::flash('success', "Record has been saved successfully!");
            return Redirect::back();
        }

       
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ATG  $aTG
     * @return \Illuminate\Http\Response
     */
    public function show(ATG $aTG)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ATG  $aTG
     * @return \Illuminate\Http\Response
     */
    public function edit(ATG $aTG)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ATG  $aTG
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ATG $aTG)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ATG  $aTG
     * @return \Illuminate\Http\Response
     */
    public function destroy(ATG $aTG)
    {
        //
    }
}
