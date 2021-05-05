@extends('Constant/Navbar')
@section('body')



<form action = "{{action('HotelRateController@update',$data->id)}}" method="Post" enctype="Multipart/formdata">

@csrf 
<div class ="container">

    <div class = "form-group">
    <lable for="name"> Hotel  :</lable>
    <select name ="hotel_id" required class="custom-select">
        <option value="{{$data->hotel_id}}">{{$data->hotel_name}}</option>

        @foreach($hotels as $hotel)
        <option value="{{$hotel->id}}">{{$hotel->name}}</option>
        @endforeach
    </select>
    </div>


    <div class = "form-group">
        <lable for="name"> Adult Rate  :</lable>
        <input type ="number" name='adult_rate' value="{{$data->adult_rate}}" required class= 'form-control' placeholder="Enter Adult rate"/>
    </div>

    <div class = "form-group">
        <lable for="child_rate"> child Rate :</lable>
        <input type ="number" name='child_rate' required value="{{$data->child_rate}}" class= 'form-control' placeholder="Enter Child Rate "/>
    </div>

    <div class = "form-group">
        <lable for="start Date"> Start Date  :</lable>
        <input type ="date" name='start_date' required value="{{$data->start_date}}" class= 'form-control' placeholder="Enter start date "/>
    </div>

    
    <div class = "form-group">
        <lable for="end  Date"> end Date  :</lable>
        <input type ="date" name='end_date' required class= 'form-control' value="{{$data->end_date}}" placeholder="Enter end date "/>
    </div>


    <button type="submit" class = "btn-primary">Update <button>

</div>
</form>


@endsection