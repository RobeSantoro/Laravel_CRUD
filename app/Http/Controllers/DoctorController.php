<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{

    public function index() // INDICE DI TUTTI I DOTTORI
    {
        $doctors = Doctor::all();
        return view('doctors.index',compact('doctors'));
    }

    public function create() //FORM
    {
       return view('doctors.create');
    }

    public function store(Request $request) // SALVARE I DATI DAL FORM
    {
        Doctor::create($request->all()); // ->validated con richiesta custom
        return redirect()->back()->with('Complimenti');
    }

    public function show(Doctor $doctor)
    {
        $doctor = Doctor::find($doctor);
        return view('doctors.show', compact('doctor'));
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $doctor->update($request->all());
        return redirect()->back()->with('Complimenti, hai modificato');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete;
        return redirect()->back()->with('Complimenti, hai eliminato');
    }
}
