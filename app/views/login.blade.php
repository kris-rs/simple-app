@extends('layouts.main ')

@section('title')
{{ 'Simple app - Login' }}
@stop

@extends('navigation')

@section('content')
   

        {{Form::open(array('url' => ' ', 'autocomplete' => 'off'))}}
            <div class="login_wrapper">
                <input type='text' name='login_username' placeholder="Username"/> <br/>
                <input type='password' name='login_password' placeholder='Password'> <br/>
                <input type='submit' value='Login'> <br/>
            </div>
        {{Form::close()}}
@stop

@section('sign_up_success')
    @if(Session::get('success'))
        <div class="sign_up_success">
              You have successfully signed up!
        </div>
    @endif
    
    @foreach($errors->all() as $error)
        <div class="errors">{{ $error }} </div>
    @endforeach
       
@stop



