<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Http\Requests\StorePhoneRequest;
use App\Http\Requests\UpdatePhoneRequest;
use App\Models\People;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::all();
        return view("phone.index",compact("phones"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peoples = People::all();
        return view("phone.create",compact("peoples"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhoneRequest $request)
    {
        $phone = new Phone();
        $phone->phone_number = $request->phone_number;
        $phone->people_id = $request->people_id;
        $phone->save();

        return view('phone.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhoneRequest $request, Phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        //
    }
}
