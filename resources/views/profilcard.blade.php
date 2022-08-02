@extends('comptelayout')
@section('content')
<!-- <link rel="stylesheet" href="../css/profilcard.css"> -->  
<div class="warcarte">
        <div class="warcarte-header">
          <img  src="storage/{{Session::get('avatar')}}"/>
         <div class="blue"  style="color: blue; position: relative !important; top: -2em ; width: 3%;display:flex;"><a href="{{ route('modifyAvatarPage') }}"><i id="tooltip1" data-ax="tooltip" data-tooltip-position="left" data-tooltip-content="Modify your profil image 😉" class="fa fa-pencil white rounded-full " style="margin: auto; position:absolute;padding: 3px;margin-left:5px; " ></i></div> </a>
        </div>
        <div class="warcarte-content grix xs2 sm2 md2 lg2">
            <div class=" grix xs2 sm2 md2 lg2  p-3 bouton1 col-xs2 col-sm2 col-md2 col-lg2" >
                <div class="p-1 col-xs1" style="font-weight: bold;">Nom:</div>
                <div class="p-1 col-xs1"> {{Session::get('name')}}</div>
            </div>
            <div class="grix xs2 sm2 md2 lg2  p-3 bouton1 col-xs2 col-sm2 col-md2 col-lg2">
                <div class="p-1 col-xs1" style="font-weight: bold;">Prénom:</div>
                <div class="p-1 col-xs1">{{Session::get('prename')}}</div>
            </div>
            <div class="grix xs2 sm2 md2 lg2  p-3 bouton1 col-xs2 col-sm2 col-md2 col-lg2">
                <div class="p-1 col-xs1" style="font-weight: bold;">Email:</div>
                <div class="p-1 col-xs1" style="word-wrap: break-word;" >{{Session::get('mail')}}</div>
            </div>
            <div class="btn2 bouton2 pos-xs2 pos-sm2 pos-md2 pos-lg2" >
            <a href="/modify-profil-info"> <p style="overflow: hidden;">Modify<i class="fa fa-pencil" style="color: blue;"></i></p></a>  
            </div>
        </div>
        
      </div>

@endsection