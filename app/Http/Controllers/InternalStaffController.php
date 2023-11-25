<?php

namespace App\Http\Controllers;

use App\Models\InternalStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InternalStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internal_staffs = InternalStaff::all();
        return view('staff.internal_staff.index')->with('internalStaffs', $internal_staffs);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function storeOrEdit(){

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'initial' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'DOB' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone_no' => 'required|integer|max:11',
            'password' => 'required|string|max:255',
            'employment_type' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        };

        $internal_staff = new InternalStaff();
        $internal_staff->initial = $request->input('initial');
        $internal_staff->first_name = $request->input('first_name');
        $internal_staff->last_name = $request->input('last_name');
        $internal_staff->DOB = $request->input('DOB');
        $internal_staff->email = $request->input('email');
        $internal_staff->phone_no = $request->input('phone_no');
        $internal_staff->password = Hash::make($request->input('password'));
        $internal_staff->employment_type = $request->input('employment_type');

        if(internal_staff->save())
        {
            echo "Sucessfully create internal staff";
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(InternalStaff $internalStaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InternalStaff $internalStaff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InternalStaff $internalStaff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InternalStaff $internalStaff)
    {
        //
    }
}
