<?php

namespace App\Exports;

use App\Supervisor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

/////////////////////////////////////////
///
///     EXPORT SUPERVISOR TO PDF
///
/////////////////////////////////////////

class SupervisorsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Supervisor::all('name', 'surname', 'department', 'count');
    }

    public function headings(): array
    {
        return [
            'Imię',
            'Nazwisko',
            'Dział',
            'Licznik',
        ];
    }
}
