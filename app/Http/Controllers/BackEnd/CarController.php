<?php

namespace App\Http\Controllers\BackEnd;

use App\Exports\ExportCar;
use App\Exports\ExportCountOfCarsPerDay;
use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CarController extends Controller
{
    public function loginAt(): JsonResponse
    {
        $car = Car::query()->insert([
            'login_at' => Carbon::now(),
        ]);

        if (!$car) {
            return response()->json(['status' => 400]);
        }

        return response()->json(['status' => 200]);
    }

    public function logoutAt(): JsonResponse|string
    {
        $car = Car::query()->firstWhere('logout_at', '=',null);
        if (!$car) {
            return 'Not Active Cars';
        }
        $now = Carbon::now();
        $totalServedTimeForCar = Carbon::parse($car->login_at)->diffInMinutes($now);
        $car->logout_at = $now;
        $car->total = $totalServedTimeForCar;
        $car->save();
        return response()->json(['status' => 200]);
    }

    public function exportCars(Request $request): BinaryFileResponse
    {
        return Excel::download(new ExportCar, 'cars.xlsx');
    }

    public function exportCountOfCarsPerDay(Request $request): BinaryFileResponse
    {
        return Excel::download(new ExportCountOfCarsPerDay, 'count-of-cars-per-day.xlsx');
    }

    public function view()
    {
        return $cars = Car::query()
            ->select('login_at', 'logout_at', 'total')
            ->whereRaw('Date(login_at) = CURDATE()')
            ->whereNotNull('logout_at')
            ->get();
        // return view('export-cars');
    }
}
