<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CarController extends Controller
{
    public function  loginAt()
    {
        $car = Car::query()->insert([
            'login_at' => Carbon::now(),
        ]);

        if (!$car) {
            return response()->json(['status' => 400]);
        }

        return response()->json(['status' => 200]);
    }

    public function  logoutAt()
    {
        $car = Car::query()->insert([
            'login_at' => Carbon::now(),
        ]);
    }
}
