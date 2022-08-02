@extends('comptelayout')
@section('content')
  <style>
    body{
      overflow: hidden;
    }
  </style>
    <form action="/new-post" method="post" style="overflow: hidden;"> 
      {{ csrf_field() }}
      <div  id="sombre" style="height: 100vh; opacity: 1; width: 100vw;background-color: rgba(0, 0, 0, 0.418);  overflow: hidden; transition: all .5s ease-in; display: flex;">
        <div class="grix xs1 sm3 shadow-3 pl-2 pr-2 pb-2 text-center rounded-1" id="post_form" style=" margin:auto; overflow: hidden; background: linear-gradient(180deg, yellow 10%, white 10%); transition: all .5s ease-in; margin:auto  ">
          <p class="  text-center m-0 col-sm3">POST IT FORM <a href="/my-posts"><i class="fa fa-times" onclick="post_form_displayer_off()" style="position: relative; float: right; top: 0.2em; "></i></a></p>
          <div class="form-field col-sm3  inline" >
          
            <textarea id="textarea" name="message" class="form-control rounded-1" style="resize: none;"></textarea>
            @if($errors->has('message'))
              <span class = "errors-displayer">{{$errors->first('message')}}</span>
            @endif
          </div>
          <div class="form-field  col-sm2">

            <input type="text" id="nom" name="auteur" class="form-control rounded-1" rows="10" cols="50" placeholder="Waris SAÏZONOU" />
            @if($errors->has('auteur'))
              <span class = "errors-displayer">{{$errors->first('auteur')}}</span>
            @endif
          </div>
          <div class="form-field col-xs1 col-sm1" style="margin-top: 14px;">
            <label class="form-check">

              <input type="checkbox" checked name="public"/>
              @if($errors->has('public'))
                <span class = "errors-displayer">{{$errors->first('public')}}</span>
              @endif

              <span>Public</span>
            </label>
          </div>
          <!-- <div class="form-field  col-sm1" style="margin-top: 14px;">
            <label class="form-check">

              <input type="color" checked name="color" />
              @if($errors->has('message'))
                <span class = "errors-displayer">{{$errors->first('color')}}</span>
              @endif
              <span>Color</span>
            </label>
          </div> -->
          <input type="submit" onclick="toast.show()" class=" btn rounded-1 yellow press   shadow-2 pos-sm3  " style="position: relative; left: 1.5em" value="Save">
          
        </div>
      </div>
    </form>
  
@endsection