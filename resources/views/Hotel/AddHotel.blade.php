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
    <lable for="name"> Hotel  :</lable>
    <select name ="star" required class="custom-select">
        <option value="">Select Star</option>

        
        <option value="3">3 Star</option>
        <option value="4">4 Star</option>
        <option value="5"> 5 Star</option>
        <option value="7"> 7 Star</option>
    
    </select>

    </div>

    <button type="submit" class = "btn btn-info">Add </button>

</div>
</form>


@endsection