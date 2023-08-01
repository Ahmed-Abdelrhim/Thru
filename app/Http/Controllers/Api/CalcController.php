<?php

namespace App\Http\Controllers\Api;

use App\Events\CarGetInEvent;
use App\Events\CarGetOutEvent;
use App\Http\Controllers\Controller;
use App\Jobs\CarGetInJob;
use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CalcController extends Controller
{
    public function carGetIn(Request $request)
    {
        $car_get_in = Car::query()->create([
            'login_at' => Carbon::now(),
        ]);

        // Todo Broadcast the event
        $countOfCars = Car::query()->count();
        broadcast(new CarGetInEvent($countOfCars))->toOthers();
        return response()->json(['message' => 'Success Transaction'],200);
    }

    public function carGetOut(Request $request)
    {
        $firstCarWithoutLogOut = Car::query()->firstWhere('logout_at', null);
        if (!$firstCarWithoutLogOut) {
            return response()->json(['message' => 'There are no cars logged in inside the system right now '],200);
        }

        $now = Carbon::now();
        $totalServedTimeForCar = Carbon::parse($firstCarWithoutLogOut->login_at)->diffInMinutes($now);
        $firstCarWithoutLogOut->logout_at = $now;
        $firstCarWithoutLogOut->total = $totalServedTimeForCar;
        $firstCarWithoutLogOut->save();
        // Todo dispatch CarGetOut Job
        // broadcast(new CarGetOutEvent($countOfCars))->toOthers();
        return response()->json(['message' => 'Success Transaction'],200);
    }
}

//$cars = Car::query()
//    ->where('logout_at', null)
//    ->orderBy('login_at','asc')
//    ->get();


//        $now = Carbon::now();
//        $totalServedTimeForCar = Carbon::parse($cars[0]->login_at)->diffInMinutes($now);
//        $cars[0]->logout_at = $now;
//        $cars[0]->total = $totalServedTimeForCar;
//        $cars[0]->save();
