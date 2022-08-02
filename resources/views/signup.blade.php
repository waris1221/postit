@extends('layout')

@section('content')
    <form action="/signup" method="post">
        {{ csrf_field() }}
        <div id="content111">
            <input class="form-control rounded-2 white m-3 col-lg1 col-md1 col-sm1 col-xs1" type='text' name='nom' id='' placeholder='Nom' value="{{ old('nom') }}">
            @if($errors->has('nom'))
                <span class = "errors-displayer">{{$errors->first('nom')}}</span>
            @endif
            <input class="form-control rounded-2 white m-3 col-lg1 col-md1 col-sm1 col-xs1" type='text' name='prenom' id='' placeholder='Prénom' value="{{ old('prenom') }}">
            @if($errors->has('prenom'))
                <span class = "errors-displayer">{{$errors->first('prenom')}}</span>
            @endif
            <input class="form-control rounded-2 white m-3 col-lg1 col-md1 col-sm1 col-xs1" type='email' name='email' id='' placeholder='Adresse mail' value="{{ old('email') }}">
            @if($errors->has('email'))
                <span class = "errors-displayer">{{$errors->first('email')}}</span>
            @endif
            <input class="form-control rounded-2 white m-3 col-lg1 col-md1 col-sm1 col-xs1" type='password' name='password' id='' placeholder='Password'>
            @if($errors->has('password'))
                <span class = "errors-displayer">{{$errors->first('password')}}</span>
            @endif
            <input class="form-control rounded-2 white m-3 col-lg1 col-md1 col-sm1 col-xs1" type='password' name='password_confirmation' id='' placeholder='Confirm password'>
            @if($errors->has('password_confirmation'))
                <span class = "errors-displayer">{{$errors->first('password_confirmation')}}</span>
            @endif
            <p id='sign-up-txt'>Already have an account ? <a  href="{{url('/login')}}">Login</a></p>
            <input type='submit' value='Sign up'>
        </div>
    </form>
@endsection
                    