@extends('Constant/Navbar')
@section('body')






<div class ="container">

    <table class ="table">

        <thead>

            <tr>
                <th>
                Hotel Name 
                </th>

                
                <th>
                Hotel Star
                </th>

                
                <th>
                Ault Rate
                </th>

                <th>
                Child Rate
                </th>

                <th>
                Total Adult Price 
                </th>
                
                
                <th>
                Total Child Price 
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
                {{$i->hotel_name}}
            </td>

            
            <td>
            {{$i->hotel_star}}
            </td>

            
            <td>
            {{$i->adult_rate}}
            </td>

            
            <td>
            {{$i->child_rate}}
            </td>


            
            <td>
            {{$i->adult_price}}
            </td>

            
            <td>
            {{$i->child_price}}
            </td>

            <td>
            {{$i->total_price}}
            </td>

          


        </tr>
        @endforeach
        </tbody>
    </table>

  

</div>



@endsection