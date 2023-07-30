<?php

namespace App\Exports;

use App\Models\Car;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ExportCar implements FromView
{
    public function view(): View
    {
        $cars = Car::query()
            ->select('login_at', 'logout_at', 'total')
            ->get();
        return view('export-cars', ['cars' => $cars]);

    }
}