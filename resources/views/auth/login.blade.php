@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>ログイン</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route'=>'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email','Eメール') !!}
                    {!! Form::email('email',old('email'),['class'=>'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password','パスワード') !!}
                    {!! Form::password('password',['class'=>'form-control']) !!}
                </div>
                
                {!! Form::submit('ログイン',['class'=>'btn btn-primary btn-block']) !!}
                
                <p class="mt-2">New user? {!! link_to_route('signup.get','Sign up now!') !!}</p>
                
            {!! Form::close() !!}
            
        </div>
    </div>

@endsection