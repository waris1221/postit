<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST-IT INDEX</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/axentix.min.css">
    <link rel="stylesheet" href="../css/moncompte.css">
    <link rel="stylesheet" href="../css/profilcard.css">
    <link rel="stylesheet" href="../css/modifyprofil.css">
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/myposts.js"></script>
    <script src="../js/axentix.min.js"></script>
    <script src="../js/compte.layout.js"></script>  
    
</head>
<body>

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="login_sign.html">CONNEXION</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-sm-2" type="text" placeholder="Search">
              <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav> -->
      

  
    <div id="nav">
        <a href="{{url('/login')}}">CONNEXION</a>
    </div>
    <div class="container">
        <div class="title">POST-IT</div>
        <div class="subtitle"> Make your memory come alive  </div>
    </div>
    <!-- <div class="displayer">
        <div class="displayer-child">
            <div class="post reveal"></div>
            <div class="post reveal1"></div>
            <div class="post reveal "></div>
            <div class="post reveal1"></div>
            <div class="post reveal"></div>
        </div> 
        <div class="displayer-child">
            <div class="post reveal1"></div>
            <div class="post reveal"></div>
            <div class="post reveal1"></div>
            <div class="post reveal"></div>
            <div class="post reveal1"></div>
        </div>
    </div> -->
  <div style="position: absolute; color: black;top: 30em;">
    <div id="card_div" class="grix xs1 sm3 md3 lg4 p-2 gutter-xs3"  style="position: relative;">
      
      @for($i=0; $i < count($posts); $i++)
          <div class="card shadow-1 rounded-3 reveal">
              <div class="warCol warS12 warM7">
                  <div class="carte">
                      <div class="carte-image">
                          <img src="{{URL::asset('images/sample-1.jpg')}}">
                          <span class="carte-title"> POST N° {{ $i+1 }}</span>
                      </div>
                      <div class="card-content">
                          <p>{{ $posts[$i]->contenu }}</p>
                      </div>
                      <div class="carte-action">
                          <a href="#">{{ $posts[$i]->auteurs }}</a>
                          <i class="fa fa-trash modal-trigger" data-target="modal-example-trash" style="float: right;"></i>
                      </div>
                  </div>
              </div>
            </div>
          @endfor

    </div>
  </div>
    <script>
        $(document).ready(function(){
        var mouseX, mouseY;
        var ww = $( window ).width();
        var wh = $( window ).height();
        var traX, traY;
        $(document).mousemove(function(e){
            mouseX = e.pageX;
            mouseY = e.pageY;
            traX = ((4 * mouseX) / 570) + 40;
            traY = ((4 * mouseY) / 570) + 50;
            console.log(traX);
            $(".title").css({"background-position": traX + "%" + traY + "%"});
        });
        });
    </script>
    
</body>
</html>