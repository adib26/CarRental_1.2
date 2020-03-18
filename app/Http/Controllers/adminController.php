<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

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



}
