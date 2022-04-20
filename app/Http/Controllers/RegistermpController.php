<?php

namespace App\Http\Controllers;

use App\Models\Registermp;
use Illuminate\Http\Request;

class RegistermpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registermps = Registermp::latest()->paginate(50);

        return view('registermps.index', compact('registermps'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registermps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'companyname' => 'required',
            'companyaddr' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'contactperson' => 'required',
            'phoneno' => 'required',
            'email' => 'required',
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
        ]);


        //create a new register company
        Registermp::create($request->all());

        //redirect the user and send friendly message
        return redirect()->route('registermps.index')
                        ->with('success','Register created successfull');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registermp  $registermp
     * @return \Illuminate\Http\Response
     */
    public function show(Registermp $registermp)
    {
        //
        return view('registermps.show', compact('registermp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registermp  $registermp
     * @return \Illuminate\Http\Response
     */
    public function edit(Registermp $registermp)
    {
        //
        return view('registermps.edit', compact('registermp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registermp  $registermp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registermp $registermp)
    {
        //
         //validate the input
         $request->validate([
            'companyname' => 'required',
            'companyaddr' => 'required',
            'postcode' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'contactperson' => 'required',
            'phoneno' => 'required',
            'email' => 'required',
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
        ]);


        //create a new register company
        $registermp->update($request->all());

        //redirect the user and send friendly message
        return redirect()->route('registermps.index')
                        ->with('success','Register updated successfull');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registermp  $registermp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registermp $registermp)
    {
        //delete the company details
        $registermp->delete();

        //redirect the user and display success message
        return redirect()->route('registermps.index')
                        ->with('success','Register deleted successfull');


    }
}
