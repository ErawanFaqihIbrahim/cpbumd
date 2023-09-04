<?php

namespace App\Exports;

use App\Models\calonpengurus;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return calonpengurus::select('nik', 'nama', 'lahir', 'pendidikan', 'pengalaman', 'referensi', 'tglseleksiadm', 'hasiladm', 'tglseleksiassess', 'lokasiassess', 'nilaiassess', 'tglseleksiwawan', 'lokasiwawan', 'hasilwawan', 'keterangan', 'updated_at')->get();
    }

    public function headings(): array{
        return ["NIK", "Nama", 'TanggalLahir', 'Pendidikan', 'Pengalaman', 'Referensi', 'tglseleksiadm', 'hasiladm', 'tglseleksiassessment', 'lokasiassessment', 'nilaiassessment', 'tglseleksiwawancara', 'lokasiwawancara', 'hasilwawancara', 'keterangan', 'lastupdate'];
    }
}
