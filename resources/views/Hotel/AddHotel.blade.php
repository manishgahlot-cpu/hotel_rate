@extends('Constant/Navbar')
@section('body')



<form action = "{{action('HotelController@insert')}}" method="Post" enctype="Multipart/formdata">

@csrf 
<div class ="container">

    <div class = "form-group">
        <lable for="name"> Name :</lable>
        <input type ="text" name='name' required class= 'form-control' placeholder="Enter Name"/>
    </div>

    <div class = "form-group">
        <lable for="address"> Address :</lable>
        <input type ="text" name='address' required class= 'form-control' placeholder="Enter Address"/>
    </div>

    <div class = "form-group">
        <lable for="star"> Star :</lable>
        <input type ="number" name='star' required class= 'form-control' placeholder="Enter star"/>
    </div>

    <button type="submit" class = "btn-primary">Add <button>

</div>
</form>


@endsection