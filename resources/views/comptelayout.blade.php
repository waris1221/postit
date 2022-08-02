<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/moncompte.css">
    <link rel="stylesheet" href="../css/axentix.min.css">
    <link rel="stylesheet" href="../css/profilcard.css">
    <link rel="stylesheet" href="../css/modifyprofil.css">

    
    <script src="../js/axentix.min.js"></script>
    <script src="../js/compte.layout.js"></script>  
    <script src="../js/jquery.min.js"></script>

    

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    

    <title>Mon-Compte</title>
</head>
<body class=" ">
    <header>
      <div class="navbar-fixed">
        <nav class="navbar shadow-1 white" style="font-size: 0.9em;">
            <button data-target="example-sidenav" class=" sidenav-trigger" style="margin-right: 10px;"><i class="fa fa-bars  bd-none " ></i></button>
            <a href="#" target="_blank" class="navbar-brand" ml-2 sm > <NOBR>POST-IT</NOBR> </a>
            <div class="navbar-menu ml-auto">
            

              <a class="navbar-link " href="{{ route('profilcard') }}"> <NOBR>{{Session::get('name')}} {{Session::get('prename')}}</NOBR> </a>
              <!-- <div class="navbar-link rounded-full yellow" href="#">Linkd</div> -->
              <div class="d-flex">
                    <div class="dropdown ml-auto" id="example-dropdown" data-ax="dropdown">
                        <div  class="  rounded-1 rounded-full green dropdown-trigger d-flex" style="overflow: hidden; width: 4em; height: 4em; border: none; outline: none;">
                            <img class="" style="max-height:100%; max-width:100%;" src="storage/{{Session::get('avatar')}}"  alt="">
                        </div>
                        <div class="dropdown-content white right-aligned shadow-1 rounded-1">
                            <a class="dropdown-item" href="/profil"><i class="fa fa-user" style="margin-right: 5px;"></i>Profil</a>
                            <a class="dropdown-item" href="/setting"><i class="fa fa-cog" style="margin-right: 5px;"></i>Setting</a>
                            <a class="dropdown-item  rounded-1 yellow press modal-trigger" href="#"  data-target="modal-example-logout"><i class="fa fa-sign-out"> Logout</i></a>
                        </div>
                    </div>
              </div>
            </div>
        </nav>
      </div>
    </header>
    
    
      <div class="sidenav shadow-1  white" id="example-sidenav" data-ax="sidenav">
        <div class="sidenav-header">
          <button data-target="example-sidenav" class="sidenav-trigger"><i class="fa fa-times"></i></button>
          <!-- <img class="sidenav-logo dropshadow-0" src="post-it-logo.gif" alt="Logo" /> -->
          <img class="sidenav-logo dropshadow-0"  src="{{URL::asset('images/post-it-logo.gif')}}" alt="">
        </div>
        <a href="/new-post" class="sidenav-link  font-w600" onclick="post_form_displayer_on()"><i class="fa fa-plus"></i> NEW POST</a>
        <a href="/my-posts" class="sidenav-link font-w600" onclick="post_displayer_on()"> <i class="fa fa-list"></i> MY POSTS</a>
        <a href="#" class="sidenav-link">Link 3</a>
        <a href="#" class="sidenav-link">Link 4</a>
        <div class="sidenav-footer yellow">
          This is a footer
        </div>
      </div>
      

    


    <main>
     
      @yield('content')

    </main>
    <footer>

    </footer>
   
    <div class="grix xs1 sm1 md1 lg1">
        <div class="modal shadow-1 white rounded-3" id="modal-example-logout" data-ax="modal" >
            <div class="modal-header"  style="font-size: 1em; text-align: center; font-weight: bold; padding-top: 2em;">
            <span style="color: gray; font-size: 0.9em;">Alerte</span>
            
            <i class="fa fa-times modal-trigger" data-target="modal-example-logout" style="color: gray; font-size: 0.8em; float: right; top:29px;"></i> <!-- Use font awesome -->
        <p >Are you sure to logout ?</p>
            </div>
            <div class="modal-content" style="justify-content: space-between; margin-top: 0.5em;">
                <a class="btn rounded-1 yellow press" href="/deconnexion" style="width: 49%;">YES</a>
                <button class="btn rounded-1 gray press modal-trigger" data-target="modal-example-logout"  style="float: right; width: 49%">NO</button>
            </div>
        </div>
    </div>
</body>
</html>