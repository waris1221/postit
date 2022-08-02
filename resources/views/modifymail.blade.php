@extends('comptelayout')
@section('content')
<form action="{{ route('mailChanged') }}" method="post"> 
    {{ csrf_field() }}
    <div class="warcarte">
        <div class="warcarte-header">
          <!-- <img  src="{{URL::asset('images/dog.jpg')}}"/> -->
          <img  src="storage/{{Session::get('avatar')}}"/>
        </div>
        <div class="warcarte-content grix xs2 sm2 md2 lg2">
            
            
            <div class="grix xs1 sm1 md1 lg1 col-xs2 col-sm2 col-md2 col-lg2">
                <input class="col-xs1 col-sm1 col-md1 col-lg1   p-3    form-control rounded-2" type="email" name="email" placeholder="mail@mail.com">
                @if($errors->has('email'))
                    <span class = "errors-displayer">{{$errors->first('email')}}</span>
                @endif
            </div>
            <input type="submit" onclick="toast.show()" class=" btn2 bouton2 pos-xs2 pos-sm2 pos-md2 pos-lg2" style="font-size: 1rem; outline:none; border:none;" value="Save">

           
        </div>
        
    </div>
</form>
@endsection