<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotel;
use App\Models\HotelRate;
class UserController extends Controller
{
    //

    public function insert(Request $request)
    {
       // return $request;
        $newUser = new User;

        $newUser->name = $request->name;
        $newUser->checkin_date = $request->checkin_date;
        $newUser->checkout_date = $request->checkout_date;
        $newUser->no_adult = $request->no_adult;
        $newUser->no_child = $request->no_child;
        $newUser->hotel_id = $request->hotel_id;
       
        // calcultae total price 
        $hotelRates = HotelRate::whereDate('start_date','<=',$request->checkin_date)->whereDate('end_date','>=',$request->checkout_date)->get();
        

        foreach($hotelRates as $hotelRate)
        {
            $hotel = Hotel::find($hotelRate->hotel_id);
            $hotelRate->hotel_name = $hotel->name;
            $hotelRate->hotel_star = $hotel->star;
           $hotelRate->adult_price = $request->no_adult * $hotelRate->adult_rate;
           $hotelRate->child_price = $request->no_child * $hotelRate->child_rate;
           $hotelRate->total_price = $hotelRate->child_price + $hotelRate->adult_price;
        }
        return view('User/HotelRateView',['data'=>$hotelRates]);

      

        
    }
        public function add()
        {
            $hotels = Hotel::all();
            return view('User/AddUser',['hotels'=>$hotels]);
        }

    
        public function list()
        {
            $data = User::all();
            return view('User/USerList',['data'=>$data]);
        }
}
