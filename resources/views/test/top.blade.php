@extends ('head')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>ПРИВЕТ МИР!</h1>
            <p>view:: test.top</p>
        </div>
    </div>

    <div class="container">
         
        
        <p class="lead">{{$date}}</p>
        <table class="table-striped table">
            @foreach($test as $result)
            <tr>
            <?php //<td>{!!$result->text!!}</td><td> {{$result->number}}</td> ?>
            <td>{{$result->cl_id}}</td><td>{{$result->cl_name}}</td><td> {{$result->cl_phone1}}</td>
            
            </tr>
            @endforeach
        </table>
        
    </div>
@stop   