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
        $hotelRates = HotelRate::where('hotel_id','=',$request->hotel_id)->get();
        //return $hotelRates;

        foreach($hotelRates as $hotelRate)
        {
            if(($hotelRate->start_date <= $request->checkin_date) && ($hotelRate->end_date >= $request->checkin_date))
            {
                $newUser->total_price = ($request->no_adult * $hotelRate->adult_rate) + ($request->no_child * $hotelRate->child_rate);

                if($newUser->save())
                {
                    return redirect('user');
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return "manish";
            }
        }

      

        
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
