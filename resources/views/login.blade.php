
@extends('layout')

@section('content')
    
    <form action="/login" method="post">
        {{ csrf_field() }}
        <input type="email" name="email" id="" placeholder=" Mail Address" value="{{ old('email') }}" class="form-control rounded-2 white m-3 col-lg1 col-md1 col-sm1 col-xs1" value="{{ old('email') }}">
        @if($errors->has('email'))
            <span class = "errors-displayer">{{$errors->first('email')}}</span>
        @endif
        <input type="password" name="password" id="" class="form-control rounded-2 white m-3 col-lg1 col-md1 col-sm1 col-xs1" placeholder="Password">
        @if($errors->has('password'))
            <span class = "errors-displayer">{{$errors->first('password')}}</span>
        @endif
        <p id="sign-up-txt">Already have an account ? <a  href="{{url('/signup')}}">Sign up</a></p>
        <input type="submit" value="Login">
    </form>
@endsection