<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class car_table extends Model
{

	public $timestamps = false;
    protected $table = 'car_table';


protected $fillable = [
        
 	'id' ,	'name' ,	'renterUsername' 	,'specification' ,	'start', 	'end', 	'price' ,	'carLocation' ,	'placeOfRecipt' ,	'state' 
    ];


}


