<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST IT</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/png" sizes="16x16" href="post-it-logo.gif">
    <link rel="stylesheet" href="../css/axentix.min.css">

</head>
<body>
    <!-- <div id="container-login-div"> -->
        <div class="login-div grix lg2 md2 sm2 xs2 p-5">
            <div id="left-login-div" class="hide-sm-down col-lg1 col-md1 col-sm1 col-xs1">
                <!-- <p>POST IT</p> -->
                <img src="{{URL::asset('images/post-it-logo.gif')}}" alt="">
            </div>
            <div id="right-login-div" class="col-lg1 col-md1 col-sm2 col-xs2 grix xs1 sm1 md1 lg1" >
                <div id="txt" class="col-lg1 col-md1 col-sm1 col-xs1 m-3">
                <NOBR>POST IT</NOBR> 
                </div>
                <div class="submit-block" class="grix xs1 sm1 md1 lg1 col-lg1 col-md1 col-sm1 col-xs1">

                @yield('content')

                </div>
            </div>
        </div>
    <!-- </div> -->
</body>
</html>