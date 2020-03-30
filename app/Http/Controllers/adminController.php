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



//end of controller
}
    function add_car(Request $request)
    {

        $this->validate($request,[
            'name' => ['required' ,'string' , 'max:100' , 'min:4'],
           // 'renter' => ['required' , 'string' , 'max:100' , 'min:4' ],
            'specification' => ['required'  ,'string' , 'max:100' , 'min:4'],
            'price' => ['required' ,'string'],
            'place' => ['required' , 'string' , 'max:100' , 'min:4' ]
        ]);
     $car_table = new car_table;
     $car_table->name = $request->input('name');
        $car_table->name = $request->input('name');
        $car_table->renter = $request->input('renter');
        $car_table->specification = $request->input('specification');
        $car_table->price = $request->input('price');
        $car_table->place = $request->input('place');
        $car_table->start = $request->input('start');
        $car_table->end = $request->input('end');
        $car_table->image = $request->input('img');
        $car_table->save();
        return redirect('AdminHome')->with('response','add successfully');


        /**
        Validator::make($car_data, [
            'name' => ['required' ,'string' , 'max:100' , 'min:4'],
            'renter' => ['required' , 'string' , 'max:100' , 'min:4' ],
            'specification' => ['required'  ,'string' , 'max:100' , 'min:4'],
            'price' => ['required' ,'string'],
            'place' => ['required' , 'string' , 'max:100' , 'min:4' ],
        ]);




        return cars::create([
            'name' => $car_data['name'],
            'renter' => $car_data['renter'],
            'specification' => $car_data['specification'],
            'start' => $car_data['start'],
            'end' => $car_data['end'],
            'place' => $car_data['place'],
            'state' => 0
        ]);
*/
    }
    public function destroy($id)
    {
        //
    }

    public function avaCar()
    {
        $car_table = DB::select('select * from car_table');
        return view('avaCar',['car_table' => $car_table]);
    }

}
