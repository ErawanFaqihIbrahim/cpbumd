<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(User $user)
    {
        return view('dashboard.applicantprofile', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.editapplicant', ['data' => $user->calonpengurus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required',
            'lahir' => 'required|date',
            'pendidikan' => 'required',
            'pengalaman' => 'required',
            'referensi' => 'required',
        ], [
            'nama.required' => 'Nama harus diisi',
            'lahir.required' => 'Tanggal Lahir harus diisi',
            'pendidikan.required' => 'Pendidikan harus diisi',
            'pengalaman.required' => 'Pengalaman harus diisi',
            'referensi.required' => 'Referensi harus diisi',
        ]);

        $data = [
            'nama' => $request->nama,
            'lahir' => $request->lahir,
            'pendidikan' => $request->pendidikan,
            'pengalaman' => $request->pengalaman,
            'referensi' => $request->referensi,
        ];
        $user->calonpengurus->update($data);
        return redirect()->to('/user/'.$user->id)->with('success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
