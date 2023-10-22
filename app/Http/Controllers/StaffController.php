<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class StaffController extends Controller
{
    public function index()
    {
        $staff = staff::orderBy('id_staff')->get();

        return view('staff.index', compact('staff')); //display list
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        Staff::create($request->all());

        return redirect()->route('staff.index')->with('success', 'Staff telah diisi');
    }

    public function show(string $id)
    {
        $staff = Staff::findOrFail($id);

        return view('staff.show', compact('staff'));
    }

    public function update(Request $request, string $id)
    {
        $staff = Staff::findOrFail($id);
 
        $staff->update($request->all());
 
        return redirect()->route('staff.index')->with('success', 'staff updated successfully');
    }

    public function edit(string $id)
    {
        $staff = Staff::findOrFail($id);
 
        return view('staff.edit', compact('staff'));
    }
 
    public function destroy(string $id)
    {
        $staff = Staff::findOrFail($id);
 
        $staff->delete();
 
        return redirect()->route('staff.index')->with('success', 'staff deleted successfully');
    }
}
