@extends ('head')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>ПРИВЕТ МИР!</h1>
            <p>view:: test.create</p>
        </div>
    </div>

    <div class="container">
     {!! Form::open(['route' => 'test.store']) !!} 
        {!! Form::label('client name') !!}
        {!! Form::text('client name', null,['class' => 'form-control']) !!}
        {!! Form::submit('add',['class' => 'btn btn-default btn-block']) !!}
     {!! Form::close() !!}
     
     
         
        
    </div>
@stop   