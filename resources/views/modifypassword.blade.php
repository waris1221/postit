@extends('comptelayout')
@section('content')
<form action="{{ route('modifyPassword1') }}" method="post">
    {{ csrf_field() }}
    <div class="warcarte">

        <div class="warcarte-header">
          <!-- <img  src="{{URL::asset('images/dog.jpg')}}"/> -->
          <img  src="storage/{{Session::get('avatar')}}"/>
        </div>
        <div class="warcarte-content grix xs2 sm2 md2 lg2">
            <!-- <div class="form-file grix xs1 sm1 md1 lg1 col-xs2 col-sm2 col-md2 col-lg2" >
                <label for="img" class="btn yellow rounded-1 shadow-1">Image</label>
                <input type="file" name="img" id="img" multiple accept="image/png, image/jpeg" />
                <div class="form-file-path"></div>
            </div> -->
            <div class="grix xs1 sm1 md1 lg1 col-xs2 col-sm2 col-md2 col-lg2">
                <p>MODIFY YOUR PASSWORD</p>
            </div>
            <div class="grix xs1 sm1 md1 lg1 col-xs2 col-sm2 col-md2 col-lg2">
            <input class="col-xs1 col-sm1 col-md1 col-lg1   p-3    form-control rounded-2" type="password" name="password" placeholder="password">
                @if($errors->has('password'))
                    <span class = "errors-displayer">{{$errors->first('password')}}</span>
                @endif
            </div>
            
            <div class="grix xs1 sm1 md1 lg1 col-xs2 col-sm2 col-md2 col-lg2">
            <input class="col-xs1 col-sm1 col-md1 col-lg1   p-3    form-control rounded-2" type="password" name="password_confirmation" placeholder="confirmed">
                @if($errors->has('password_confirmation'))
                <span class = "errors-displayer">{{$errors->first('password_confirmation')}}</span>
                @endif
            </div>
            <div class="btn2 bouton2 pos-xs1 pos-sm1 pos-md1 pos-lg1">
                <p><a href="{{ route('mailChanged') }}">Modify Mail </a> </p>
            </div>
            <input type="submit" onclick="toast.show()" class=" btn2 bouton2 pos-xs2 pos-sm2 pos-md2 pos-lg2" style="font-size: 1rem; outline:none; border:none;" value="Save">
                <!-- <div class="btn2 bouton2 pos-xs2 pos-sm2 pos-md2 pos-lg2">
                    <p>Save <i class="fa fa-save" style="color: blue;"></i></p>
                </div> -->
        </div>
        
    </div>
</form>
@endsection