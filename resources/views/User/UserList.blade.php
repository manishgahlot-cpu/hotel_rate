@extends('Constant/Navbar')
@section('body')






<div class ="container">

    <table class ="table">

        <thead>

            <tr>
                <th>
                User Id 
                </th>

                
                <th>
                User Name
                </th>

                
                <th>
                No. Adult
                </th>

                <th>
                No. Child
                </th>

                <th>
                Check in date 
                </th>
                
                
                <th>
                Check out date 
                </th>

                
                <th>
                Total price  
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
            {{$i->no_adult}}
            </td>

            
            <td>
            {{$i->no_child}}
            </td>


            
            <td>
            {{$i->checkin_date}}
            </td>

            
            <td>
            {{$i->checkoout_date}}
            </td>

            <td>
            {{$i->total_price}}
            </td>

          


        </tr>
        @endforeach
        </tbody>
    </table>

    <a href="addUser" >Add New User </a>

</div>



@endsection