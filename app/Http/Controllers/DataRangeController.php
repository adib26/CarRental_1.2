<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DataRangeController extends Controller
{
    public function rentCar()
    {
        $car_table = DB::select('select * from car_table');
        return view('user/SearchForAcar',['car_table' => $car_table]);
    }

    public function filterCar(Request $request)
    {
        $carFS = $request->input('from_date');
        $carFE =  $request->input('to_date');
        $carLoc = $request->input('location');
        $car_table = DB::select('select * from car_table')->where($carLoc == carLocation && $carFE <= end &&
            $carFS >= start);

        return view('user/SearchForAcar',['car_table' => $car_table]);



    }
}
