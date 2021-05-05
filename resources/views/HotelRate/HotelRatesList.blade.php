@extends('Constant/Navbar')
@section('body')






<div class ="container">

    <table class ="table">

        <thead>

            <tr>
                <th>
                Hotel ID
                </th>

                
                <th>
                Start Date 
                </th>

                
                <th>
                End Date
                </th>

                
                <th>
                Adult Rate 
                </th>

                
                <th>
                Child Rate 
                </th>
                
                <th>
                Update / Delete
                </th>

            </tr>

        </thead>
        <tbody>
        @foreach($data as $i )
        <tr>
            <td>
                {{$i->hotel_id}}
            </td>

            
            <td>
            {{$i->start_date}}
            </td>

            
            <td>
            {{$i->end_date}}
            </td>

            
            <td>
            {{$i->adult_rate}}
            </td>

            
            <td>
            {{$i->child_rate}}
            </td>


            <td>
            <a href="EditHotelRate/{{$i->id}}">Update</a>
            <a href="deleteHotelRate/{{$i->id}}" onclick = "return confirm(' do you want to delete');">Delete</a>
            </td>


        </tr>
        @endforeach
        </tbody>
    </table>

    <a href="addHotelRate" type="button" class="btn btn-info" >Add New Hotel Rate </a>

</div>



@endsection