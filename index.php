<?php

/*** begin our session ***/
session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );

/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Connect-It</title>
    <meta charset="UTF-8">
    <meta name="description" content="Social media website">
    <meta name="keywords" content="friends,share,add,connect,chat">
    <!--viewport to make the website look good on all devices-->
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <!--  stylesheets -->
    <link rel="stylesheet" type="text/css" href="demo1.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
    $(function() {
  $(".btn").click(function() {
    $(".form-signin").toggleClass("form-signin-left");
    $(".form-signup").toggleClass("form-signup-left");
    $(".frame").toggleClass("frame-long");
    $(".signup-inactive").toggleClass("signup-active");
    $(".signin-active").toggleClass("signin-inactive");
    $(".forgot").toggleClass("forgot-left");   
    $(this).removeClass("idle").addClass("active");
  });
});

$(function() {
  $(".btn-signup").click(function() {
  $(".nav").toggleClass("nav-up");
  $(".form-signup-left").toggleClass("form-signup-down");
  $(".success").toggleClass("success-left"); 
  $(".frame").toggleClass("frame-short");
    // var data = new FormData();
    // data.append("",selectedProducts);
    // jQuery.ajax({
    //     type : "POST",
    //     url : "/admin/products",
    //     data : data,
    //     cache: false,             // To unable request pages to be cached
    //     processData: false,
    //     contentType: false,
    //     success : function(data){
    //         for (var i = selectedProducts.length - 1; i >= 0; i--) {
    //             var productRow = document.getElementById(selectedProducts[i]);
    //             productRow.remove();
    //         }
    //         console.log(data); }});
  });
});

$(function() {
  $(".btn-signin").click(function() {
  $(".btn-animate").toggleClass("btn-animate-grow");
  $(".welcome").toggleClass("welcome-left");
  $(".cover-photo").toggleClass("cover-photo-down");
  $(".frame").toggleClass("frame-short");
  $(".profile-photo").toggleClass("profile-photo-down");
  $(".btn-goback").toggleClass("btn-goback-up");
  $(".forgot").toggleClass("forgot-fade");

  });
});
  </script>
</head>
<body>
      

 <!--  <nav class="nav-bar">
    <ul>
      <li><a href="#">Login</a></li>
      <li><a href="#">Sign Up</a></li>
    </ul>
  <nav>
  -->
   <div class="container">
    <div class="frame">
      <div class="nav">
        <ul class="links">
          <li class="signin-active">
            <a class="btn">Sign in</a>
          </li>
          <li class="signup-inactive">
            <a class="btn">Sign up</a>
          </li>
        </ul>
      </div>
      <div>
        <form class="form-signin" action="signin.php" method="POST" name="form">
          <label for="username">Username</label>
          <input class=" form-styling" type="text" id="username" name="username" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="password" id="password" name="password" placeholder=""/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox"><span class="ui"></span>Keep me signed in</label>
          <!-- To save the token-->
          <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
          <div class="btn-animate">
            <input type="submit" class="btn-signin" value="Sign in" />
          </div>
        </form>
      <form class="form-signup" action="signup.php" method="POST" name="form">
        <label for="fullname">Full name</label>
        <input class="form-styling" type="text" id="username" name="username" placeholder=""/>
        <label for="email">Email</label>
        <input class="form-styling" type="text" id="email" name="email" placeholder=""/>
        <label for="password">Password</label>
        <input class="form-styling" type="password" id="password" name="password" placeholder=""/>
        <label for="confirmpassword">Confirm password</label>
        <input class="form-styling" type="text" name="confirmpassword" placeholder=""/>
        <!-- To save the token-->
        <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
        <input type="submit" class="btn-signup" value="Sign Up" />
      </form>
    <div  class="success">
              <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 60 60" id="check" ">
             </div>
      </div>
      
      <div class="forgot">
        <a href="#">Forgot your password?</a>
      </div>
  </div>
    </svg>
</div>
</body>
</html>