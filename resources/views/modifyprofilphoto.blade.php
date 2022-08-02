@extends('comptelayout')
@section('content')
<form action="{{ route('modifyAvatar')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="warcarte">

        <div class="warcarte-header">
          <img  src="storage/{{Session::get('avatar')}}"/>
        </div>
        <div class="warcarte-content grix xs2 sm2 md2 lg2">
            <div class="form-file grix xs1 sm1 md1 lg1 col-xs2 col-sm2 col-md2 col-lg2" >
                <label for="avatar" class="btn yellow rounded-1 shadow-1">Image</label>
                <input type="file" name="avatar" id="avatar" multiple accept="image/png, image/jpeg" />
                @if($errors->has('avatar'))
                    <span class = "errors-displayer">{{$errors->first('avatar')}}</span>
                @endif
                <div class="form-file-path"></div>
            </div>
            <input type="submit" onclick="toast.show()" class=" btn2 bouton2 pos-xs2 pos-sm2 pos-md2 pos-lg2" style="font-size: 1rem; outline:none; border:none;" value="Save">

            <!-- <div class="btn2 bouton2 pos-xs2 pos-sm2 pos-md2 pos-lg2">
                <p>Save <i class="fa fa-save" style="color: blue;"></i></p>
            </div>  -->
        </div>
        
    </div>
</form>
@endsection