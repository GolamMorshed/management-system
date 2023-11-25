<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('staff.index', ['staffs' => $staffs]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $staff = new Staff();
        // Generate a random 6-digit number
        $randomNumber = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
        $staff->UID = $randomNumber;
        $staff->initial = $request->input('initial');
        $staff->first_name = $request->input('first_name');
        $staff->last_name = $request->input('last_name');
        $staff->dob = $request->input('dob');
        $staff->email = $request->input('email');
        $staff->password = Hash::make($request->input('password'));
        $staff->employment_type = $request->input('employment_type');
        $staff->address = $request->input('address');
        $staff->postcode = $request->input('postcode');
        $staff->phone_no = $request->input('phone_no');
        $staff->shift_type = $request->input('shift_type');

        if($staff->save()){
            echo "Successfully Saved";
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
