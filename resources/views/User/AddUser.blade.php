@extends('Constant/Navbar')
@section('body')



<form action = "{{action('UserController@insert')}}" method="Post" enctype="Multipart/formdata">

@csrf 
<div class ="container">

    <div class = "form-group">
        <lable for="name"> Name :</lable>
        <input type ="text" name='name' required class= 'form-control' placeholder="Enter Name"/>
    </div>

    <div class = "form-group">
    <lable for="name"> Hotel  :</lable>
    <select name ="hotel_id" required>
        <option value="">Select Hotel</option>

        @foreach($hotels as $hotel)
        <option value="{{$hotel->id}}">{{$hotel->name}}</option>
        @endforeach
    </select>
    </div>




    <div class = "form-group">
        <lable for="star"> Check In Date:</lable>
        <input type ="date" name='checkin_date' required class= 'form-control' placeholder="Enter Check in date"/>
    </div>

    <div class = "form-group">
        <lable for="star"> Check Out Date:</lable>
        <input type ="date" name='checkout_date' required class= 'form-control' placeholder="Enter Check Out date"/>
    </div>


    <div class = "form-group">
        <lable for="star"> No. Audlt:</lable>
        <input type ="number" name='no_adult' required class= 'form-control' placeholder="Enter No Adult"/>
    </div>


    
    <div class = "form-group">
        <lable for="star"> No. Child:</lable>
        <input type ="number" name='no_child' required class= 'form-control' placeholder="Enter No child"/>
    </div>

    <button type="submit" class = "btn-primary">Add User<button>

</div>
</form>


@endsection