<?php

namespace App\Exports;

use App\Models\Mahasiswa; // Import Mahasiswa model
use Maatwebsite\Excel\Concerns\FromCollection;

class MahasiswaExport implements FromCollection
{
    public function collection()
    {
        return Mahasiswa::all();
    }
}
