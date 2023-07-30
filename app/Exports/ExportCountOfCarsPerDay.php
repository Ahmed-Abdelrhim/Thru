<?php

namespace App\Exports;

use App\Models\Car;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class ExportCountOfCarsPerDay implements FromView
{
    public function view(): View
    {
        $cars = Car::query()
            ->select('login_at', 'logout_at', 'total')
            ->whereRaw('Date(login_at) = CURDATE()')
            ->whereNotNull('logout_at')
            ->get();
        return view('excel.export-count-cars-per-day', ['cars' => $cars]);
    }
}
