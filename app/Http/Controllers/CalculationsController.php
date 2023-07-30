<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CalculationsController extends Controller
{
    public function dashboard(): View
    {
        $carsCountPerDay = Car::query()
            ->whereDate('login_at', '=', Carbon::today())
            ->count();

        $carsCountPerHour = Car::query()->whereBetween('login_at',
            [
                now()->subHours(1),
                now(),
            ])
            ->count();

        $avgServingTime = (int) Car::query()->average('total');
        $totalServedCars = Car::query()->count();

        return view('frontend.index', [
            'carsCount'        =>        $carsCountPerDay,
            'carsCountPerHour' =>        $carsCountPerHour,
            'avgServingTime'   =>        $avgServingTime,
            'totalServedCars'  =>        $totalServedCars,
        ]);
    }
}
