<?php

namespace App\Http\Controllers;

use App\car_table;
use App\cars;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{
    

	function blockUser(Request $request){

		$username = $request->username;


		// if you want to block user
		if($request->submit == "b"){


			//if username in the db
			if ( User::where('username',$username)->count() > 0 ) {
				
				$user = User::where('username',$username)->first();
				//if user is already blocked		
				if($user->state == true){


					return back()->with('error', 'User is already blocked !!');
				}

				//if user is not blocked
				else{

					User::where('username',$username)->update(['state'=>1]);
					//$user->state = true;
					return back()->with('error', 'User Has been blocked !!');
				}




			}

		//if user is not in the db
		else{
			return back()->with('error', 'User is not in the database !!');
			
		}


}
		// if you want to unblock user
		else{



			//if username in the db
			if ( User::where('username',$username)->count() > 0 ) {
				
				$user = User::where('username',$username)->first();
				//if user is already blocked		
				if($user->state == true){

					User::where('username',$username)->update(['state'=>0]);
					return back()->with('error', 'User Has been unblocked.');
				}

				//if user is not blocked
				else{

				return back()->with('error', 'User is already unblocked !!');	

				}



			}

			//if user is not in the db
		else{
			return back()->with('error', 'User is not in the database !!');
			
		}


		}



//end of block user
}



    function add_car(Request $request)
    {

        $this->validate($request,[
            'name' => ['required' ,'string' , 'max:100' , 'min:4'],
           // 'renter' => ['required' , 'string' , 'max:100' , 'min:4' ],
            'specification' => ['required'  ,'string' , 'max:100' , 'min:4'],
            'price' => ['required' ,'Integer'],
            'place' => ['required' , 'string' , 'max:100' , 'min:4' ],
          /*  'img' => 'required|image|mimes:jpeg,png,jpg,svg',*/
            'start'=> ['required'],
            'end'=> ['required'],
        ]);
     $car_table = new car_table;
    
        $car_table->name = $request->input('name');
        $car_table->specification = $request->input('specification');
        $car_table->price = $request->input('price');
        $car_table->placeOfRecipt = $request->input('place');
        $car_table->start = $request->input('start');
        $car_table->end = $request->input('end');
        $car_table->carLocation = $request->input('loc');
        $car_table->save();

        $row = car_table::where([ ['specification','=',$request->specification ], ['name','=',$request->name]  ])->first();
        $imageName = $row->id.'.'.'png';  
        $request->img->move(public_path('images'), $imageName);

        return redirect('AdminHome')->with('response','add successfully');


        //end of add_car
    }



    public function removeCar(Request $request)
    {
        
      $idd = $request->btn;
      public_path(($request->bt).'png')->delete();
      DB::table('car_table')->where('id', '=', $idd)->delete();
      return $this->avaCar();

    }



    public function avaCar()
    {
        $car_table = DB::select('select * from car_table');
        return view('Admin/AvailableCars',['car_table' => $car_table]);
    }





}
