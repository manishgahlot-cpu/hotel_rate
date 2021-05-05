@extends('Constant/Navbar')
@section('body')



<form action = "{{action('HotelRateController@insert')}}" method="Post" enctype="Multipart/formdata">

@csrf 
<div class ="container">

    <div class = "form-group">
    <lable for="name"> Hotel  :</lable>
    <select name ="hotel_id" required class="custom-select">
        <option value="">Select Hotel</option>

        @foreach($hotels as $hotel)
        <option value="{{$hotel->id}}">{{$hotel->name}}</option>
        @endforeach
    </select>
    </div>


    <div class = "form-group">
        <lable for="name"> Adult Rate  :</lable>
        <input type ="number" name='adult_rate' required class= 'form-control' placeholder="Enter Adult rate"/>
    </div>

    <div class = "form-group">
        <lable for="child_rate"> child Rate :</lable>
        <input type ="number" name='child_rate' required class= 'form-control' placeholder="Enter Child Rate "/>
    </div>

    <div class = "form-group">
        <lable for="start Date"> Start Date  :</lable>
        <input type ="date" name='start_date' required class= 'form-control' placeholder="Enter start date "/>
    </div>

    
    <div class = "form-group">
        <lable for="end  Date"> end Date  :</lable>
        <input type ="date" name='end_date' required class= 'form-control' placeholder="Enter end date "/>
    </div>


    <button type="submit" class = " btn btn-info">Add</button>

</div>
</form>


@endsection