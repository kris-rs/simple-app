@extends('layouts.main ')

@section('title')
{{ 'Simple app - Sign up' }}
@stop


@extends('navigation')

@section('content')

{{Form::open(array('autocomplete' => 'off'))}}
<div class="login_wrapper">
    <input type='text' name='login_username' placeholder="Username" /> <br/>
    <input type='password' name='login_password' placeholder='Password'> <br/>
    <input type='password' name='login_password_confirmation' placeholder='Repeat password'> <br/>
    <input type='submit' value='Sign up'> <br/>
</div>
{{Form::close()}}


@stop

@section('sign_up_success')    
    @foreach($errors->all() as $error)
        <div class="errors">{{ $error }} </div>
    @endforeach
@stop


