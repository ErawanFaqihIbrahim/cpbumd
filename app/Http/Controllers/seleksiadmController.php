<?php

namespace App\Http\Controllers;

use App\Models\seleksiadmin;
use Illuminate\Http\Request;

class seleksiadmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.jadwal');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwal = seleksiadmin::findOrFail($id);
        return view('dashboard.jadwal', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'tglseleksiadm' => 'required',
            'tglseleksiassess' => 'required',
            'tglseleksiwawan' => 'required',
            'tglpengumumanadm' => 'required',
            'tglpengumumanassess' => 'required',
            'tglpengumumanwawan' => 'required',
            'lokasiassess' =>'required',
            'lokasiwawan' => 'required',
        ]);

        $jadwal = seleksiadmin::first();
        $jadwal->update($request->all());

        return redirect()->back()->with('success', 'Jadwal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
