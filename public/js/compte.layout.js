let toast = new Axentix.Toast('Saving Successful', {
    classes: 'secondary rounded-2 shadow-2'
  });
  function post_form_displayer_on(){
    document.getElementById("example-sidenav").classList.remove("active");
    document.getElementsByClassName("sidenav-overlay")[0].classList.remove("active");
    // document.getElementById("card_div").style.display = "none";
    
    document.getElementById("post_form").style.left="1000px";
    document.getElementById("sombre").style.opacity = 1;
    console.log("waris");
    
  }
  function post_form_displayer_off(){
    document.getElementById("post_form").style.left="-200px";
    document.getElementById("sombre").style.opacity = 0;
  }

  function post_displayer_on(){
    document.getElementById("example-sidenav").classList.remove("active");
    document.getElementsByClassName("sidenav-overlay")[0].classList.remove("active");
    document.getElementById("sombre").style.display = "none";
    // document.getElementById("card_div").style.display = "block";
  }

//   function post_modal_displyer_off(){
//     document.getElementById("modal-example-trash").classList.remove("active");
//     document.getElementsByClassName("modal-overlay active")[0].classList.remove("active");
//     document.getElementsByClassName("modal-overlay")[0].classList.remove("modal-overlay");
//     document.getElementsByTagName("body")[0].style.overflow = "";

//   }
//   function logout_modal_displyer_off(){
//     document.getElementById("modal-example-logout").classList.remove("active");
//     document.getElementsByClassName("modal-overlay active")[0].classList.remove("active");
//     document.getElementsByTagName("body")[0].style.overflow = "";
//     document.getElementById("modal-example-logout").style.display="none";
//   }