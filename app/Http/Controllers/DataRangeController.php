<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\car_table;
class DataRangeController extends Controller
{
/*    public function rentCar()
    {
        $car_table = DB::select('select * from car_table');
        return view('user/SearchForAcar',['car_table' => $car_table]);
    }*/

    public function filterCar(Request $request)
    {

        if($request->input('from_date') != null){
        $carFS = $request->input('from_date');
        $carFE =  $request->input('to_date'); 
        $carLoc = $request->input('location');
       
        $car_tablez = DB::table('car_table')->where([ ['carLocation', '=', $carLoc], ['end', '>=', $request->input('to_date')], ['start', '<=',  $request->input('from_date')] ])->get();

        return view('user/SearchForAcar')->with('carz' , $car_tablez);
    }else{
        $car_tablez = DB::table('car_table')->get();
        return view('user/SearchForAcar')->with('carz' , $car_tablez);

    }



    }




}