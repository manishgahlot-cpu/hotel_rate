@extends('Constant/Navbar')
@section('body')



<form action = "{{action('HotelController@update',$data->id)}}" method="Post" enctype="Multipart/formdata">

@csrf 
<div class ="container">

    <div class = "form-group">
        <lable for="name"> Name :</lable>
        <input type ="text" name='name' value="{{$data->name}}" required class= 'form-control' placeholder="Enter Name"/>
    </div>

    <div class = "form-group">
        <lable for="address"> Address :</lable>
        <input type ="text" name='address' required value="{{$data->address}}" class= 'form-control' placeholder="Enter Address"/>
    </div>

    <div class = "form-group">
        <lable for="star"> Star :</lable>
        <input type ="number" name='star' required value="{{$data->star}}" class= 'form-control' placeholder="Enter star"/>
    </div>

    <button type="submit" class = "btn btn-info">Update Hotel </button>

</div>
</form>


@endsection