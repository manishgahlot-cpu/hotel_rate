<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
class HotelController extends Controller
{
    //
    public function insert(Request $request)
    {
        //return $request;
        $newHotel = new Hotel;
        $newHotel->name = $request->name;
        $newHotel->star = $request->star;
        $newHotel->address = $request->address;

        if($newHotel->save())
        {
            return redirect('Hotels');
        }
        else
        {
            return false ;
        }
    }

    public function update($id,Request $request)
    {
        //return $request;
        $hotel = Hotel::find($id);

        if($hotel->update(['name'=>$request->name,'star'=>$request->star,'address'=>$request->address]))
        {
            return redirect('Hotels');
        }
        else
        {

            return false;
         }
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('Hotel/EditHotel',['data'=>$hotel]);
    }

    public function delete($id)
    {
        $hotel = Hotel::find($id);
        
        if($hotel->delete())
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
        $data = Hotel::all();

        return view('Hotel/HotelsList',['data'=>$data]);
    }


}
