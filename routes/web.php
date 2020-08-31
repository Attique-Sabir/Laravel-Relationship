<?php

use App\User;
use App\Address;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Course;
use App\Country;
use App\Province;


Route::get('/', function () {
    // $address = Address::find(1);
    // $user = User::find(1);

//    $address =  $user->address;
//    $user =  $address->user;

//     $course=Course::where('course_name','web COurses')->get();
//    return $course;

    // $user=User::find(1);
    // $user->course;

    // return $user->course;



    // dd($courses);
//    $course=Course::find('name','ali');
   $user=User::all();
   $country=Country::all();
   
   $cuser=Course::all();
//    $cu=$cuser->users;
//    return ($cu);
//    $address=$user->address;
//    return $address;
// $provinces=[];
// foreach ($country as $list )
// {
//    array_push($provinces, $list->province_name);

// // return $list->province_name;

// }
// return $provinces;
// $country=$province->country->country_name->get();
  


    return view('welcome', compact('user','country','cuser') );
});
Route::get('/view_province/{view_province}', 'ProvinceController@show')->name('view_province');




