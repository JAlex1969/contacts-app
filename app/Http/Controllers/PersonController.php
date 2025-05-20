<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $people = Person::all();

        return view('person.index')->with('people', $people);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|max:15',
        ]);
        
        $person = new Person();
        $person->firstname = $validatedData['firstname'];
        $person->lastname = $validatedData['lastname'];
        $person->email = $validatedData['email'];
        $person->phone = $validatedData['phone'];
        $person->save();

        return redirect()->route('person.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
