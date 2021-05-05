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
                Hotel Name
                </th>

                
                <th>
                Hotel Star
                </th>

                
                <th>
                Address
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
                {{$i->id}}
            </td>

            
            <td>
            {{$i->name}}
            </td>

            
            <td>
            {{$i->star}}
            </td>

            
            <td>
            {{$i->address}}
            </td>

            <td>
            <a href="editHotel/{{$i->id}}">Update</a>
            <a href="deleteHotel/{{$i->id}}" onclick = "return confirm(' do you want to delete');">Delete</a>
            </td>


        </tr>
        @endforeach
        </tbody>
    </table>

    <a href="AddHotel" type="button" class="btn btn-info">Add New Hotel </a>

</div>



@endsection