<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CalcController extends Controller
{
    public function carGetIn(Request $request): JsonResponse
    {
        $car_get_in = Car::query()->create([
            'login_at' => Carbon::now(),
        ]);
        return response()->json(['message' => 'Success Transaction'],200);
    }

    public function carGetOut(Request $request): JsonResponse
    {
        $cars = Car::query()
            ->where('logout_at', null)
            ->orderBy('login_at','asc')
            ->get();
        if (count($cars) === 0) {
            return response()->json(['message' => 'There are no cars logged in inside the system right now '],200);
        }

        $now = Carbon::now();
        $totalServedTimeForCar = Carbon::parse($cars[0]->login_at)->diffInMinutes($now);
        $cars[0]->logout_at = $now;
        $cars[0]->total = $totalServedTimeForCar;
        $cars[0]->save();
        return response()->json(['message' => 'Success Transaction'],200);
    }
}
