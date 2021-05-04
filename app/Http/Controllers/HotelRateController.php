<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelRate;
use App\Models\Hotel;
class HotelRateController extends Controller
{
    //

    public function add()
    {
        $hotels = Hotel::all();
        return view("HotelRate/AddHotelRate",['hotels'=>$hotels]);
    }

    public function insert(Request $request)
    {
       // return $request;
        $newHotelRate = new HotelRate;
        $newHotelRate->adult_rate = $request->adult_rate;
        $newHotelRate->child_rate = $request->child_rate;
        $newHotelRate->start_date = $request->start_date;
        $newHotelRate->end_date = $request->end_date;
        $newHotelRate->hotel_id= $request->hotel_id;

        if($newHotelRate->save())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function update($id,Request $request)
    {
        
        $hotelRate = HotelRate::find($id);
        

        if($hotelRate->update(['hotel_id'=>$request->hotel_id,'adult_rate'=>$request->adult_rate,'child_rate'=>$request->child_rate,'start_date'=>$request->start_date,'end_date'=>$request->end_date]))
        {
            return true;
        }

        else
        {
            return false;
        }

    }

    public function edit($id)
    {
        $hotelRate = HotelRate::find($id);
        $hotel = Hotel::find($hotelRate->hotel_id);
        $hotelRate->hotel_name = $hotel->name;
        
        $hotels = Hotel::all();
        return view('HotelRate/EditHotelRate',['data'=>$hotelRate,'hotels'=>$hotels]);
    }

    public function delete($id)
    {
        $hotelRate = HotelRate::find($id);
        if($hotelRate->delete())
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function list()
    {
        $data = HotelRate::all();
        return view('HotelRate/HotelRatesList',['data'=>$data]);
    }



}
