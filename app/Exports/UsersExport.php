<?php

namespace App\Exports;

use App\Supervisor;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

/////////////////////////////////////////
///
///     EXPORT USER TO PDF
///
/////////////////////////////////////////

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all('name', 'surname', 'department', 'i', 'q', 'o', 'r', 'i2', 'a', 'n');
    }

    public function headings(): array
    {
        return [
            'Imię',
            'Nazwisko',
            'Dział',
            'I',
            'Q',
            'O',
            'R',
            'I',
            'A',
            'N',
        ];
    }

}
