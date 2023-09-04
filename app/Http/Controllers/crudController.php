<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Models\seleksiadmin;
use Illuminate\Http\Request;
use App\Models\calonpengurus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $name = Auth::user()->name;
        $katakunci = $request->katakunci;
        $jumlahdata = 5;
        if (strlen($katakunci)) {
            $data = calonpengurus::where('nik', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('pendidikan', 'like', "%$katakunci%")
                ->paginate($jumlahdata);
        } else {
            $data = calonpengurus::orderBy('nik', 'asc')->paginate($jumlahdata);
        }
        return view('dashboard.index', compact('name'))->with('data', $data);
    }

    public function applicant(Request $request)
    {
        $name = Auth::user()->name;
        $katakunci = $request->katakunci;
        $jumlahdata = 5;
        if (strlen($katakunci)) {
            $data = calonpengurus::where('nik', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('pendidikan', 'like', "%$katakunci%")
                ->paginate($jumlahdata);
        } else {
            $data = calonpengurus::orderBy('nik', 'asc')->paginate($jumlahdata);
        }
        return view('dashboard.applicant', compact('name'))->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->hasilasses);
        Session::flash('nik', $request->nik);
        Session::flash('nama', $request->nama);
        Session::flash('lahir', $request->lahir);
        Session::flash('pendidikan', $request->pendidikan);
        Session::flash('pengalaman', $request->pengalaman);
        Session::flash('referensi', $request->referensi);
        Session::flash('nilaiassess', $request->nilaiassess);
        Session::flash('keterangan', $request->keterangan);

        $request->validate([
            'nik' => 'required|numeric|digits:16|unique:calonpengurus,nik',
            'nama' => 'required',
            'lahir' => 'required|date',
            'pendidikan' => 'required',
            'pengalaman' => 'required',
            'referensi' => 'required',
            'hasiladm' => 'required',
            'nilaiassess' => 'required',
            'hasilwawan' => 'required',
            'lokasiassess' =>'required',
            'lokasiwawan' => 'required',

        ], [
            'nik.required' => 'NIK harus diisi',
            'nik.numeric' => 'NIK harus berupa angka',
            'nik.unique' => 'NIK sudah ada dalam database',
            'nama.required' => 'Nama harus diisi',
            'lahir.required' => 'Tanggal Lahir harus diisi',
            'pendidikan.required' => 'Pendidikan harus diisi',
            'pengalaman.required' => 'Pengalaman harus diisi',
            'referensi.required' => 'Referensi harus diisi',
            'hasiladm.required' => 'Hasil Administrasi harus diisi',
            'lokasiassess.required' => 'Lembaga Assessment harus diisi',
            'nilaiassess.required' => 'Nilai Assessment harus diisi',
            'lokasiwawan.required' => 'Lokasi Wawancara harus diisi',
            'hasilwawan.required' => 'Nilai Wawancara harus diisi',

        ]);

        $data = [
            'nik' => $request->nik,
            'nama' => $request->nama,
            'lahir' => $request->lahir,
            'pendidikan' => $request->pendidikan,
            'pengalaman' => $request->pengalaman,
            'referensi' => $request->referensi,
            'hasiladm' => $request->hasiladm,
            'nilaiassess' => $request->nilaiassess,
            'hasilwawan' => $request->hasilwawan,
            'lokasiassess' => $request->lokasiassess,
            'lokasiwawan' => $request->lokasiwawan,
            'tglseleksiadm' => $request->tglseleksiadm,
            'tglseleksiassess' => $request->tglseleksiassess,
            'tglseleksiwawan' => $request->tglseleksiwawan,
            'keterangan' => $request->keterangan,
        ];
        calonpengurus::create($data);
        return redirect()->to('admin')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $nik)
    {
        $cpbumd = calonpengurus::where('nik', $nik)->first();
        return view('dashboard.detail', ['cpbumd' => $cpbumd]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = calonpengurus::where('nik', $id)->first();
        return view('dashboard.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'lahir' => 'required|date',
            'pendidikan' => 'required',
            'pengalaman' => 'required',
            'referensi' => 'required',
            'hasiladm' => 'required',
            'nilaiassess' => 'required',
            'hasilwawan' => 'required',
            'lokasiassess' =>'required',
            'lokasiwawan' => 'required',
        ], [
            'nik.numeric' => 'NIK harus berupa angka',
            'nik.unique' => 'NIK sudah ada dalam database',
            'nama.required' => 'Nama harus diisi',
            'lahir.required' => 'Tanggal Lahir harus diisi',
            'pendidikan.required' => 'Pendidikan harus diisi',
            'pengalaman.required' => 'Pengalaman harus diisi',
            'referensi.required' => 'Referensi harus diisi',
            'hasiladm.required' => 'Hasil Administrasi harus diisi',
            'lokasiassess.required' => 'Lembaga Assessment harus diisi',
            'nilaiassess.required' => 'Nilai Assessment harus diisi',
            'lokasiwawan.required' => 'Lokasi Wawancara harus diisi',
            'hasilwawan.required' => 'Nilai Wawancara harus diisi',
        ]);

        $data = [
            'nama' => $request->nama,
            'lahir' => $request->lahir,
            'pendidikan' => $request->pendidikan,
            'pengalaman' => $request->pengalaman,
            'referensi' => $request->referensi,
            'hasiladm' => $request->hasiladm,
            'nilaiassess' => $request->nilaiassess,
            'hasilwawan' => $request->hasilwawan,
            'lokasiassess' => $request->lokasiassess,
            'lokasiwawan' => $request->lokasiwawan,
            'tglseleksiadm' => $request->tglseleksiadm,
            'tglseleksiassess' => $request->tglseleksiassess,
            'tglseleksiwawan' => $request->tglseleksiwawan,
            'keterangan' => $request->keterangan,

        ];
        calonpengurus::where('nik', $id)->update($data);
        return redirect()->to('admin')->with('success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        calonpengurus::where('nik', $id)->delete();
        return redirect()->to('admin')->with('success', 'Data Berhasil Dihapus!');
    }

    //export
    public function export(){
        return Excel::download(new UserExport, 'user.xlsx');
    }
}
