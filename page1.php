<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>
<body >

<div id="maindiv">

    <div id="navdiv">
	   
       <ul>
            <span > Own Food</span>
           <li > <a  id="trig"href="#modal" > Login</a></li>
           <li > <a id="trig1"href="#modal" > Signup</a></li>
           <li > <a href=""> Become a chef</a></li>
       </ul>
    </div>

</div>
<div id="modal" class="popupContainer" style="display:none;">
    <header class="popupHeader">
      <span class="header_title">Login</span>
      <span class="modal_close"><i class="fa fa-times"></i></span>
    </header>
    
    <section class="popupBody">
      <!-- Social Login -->
      <div class="social_login">
        <div class="">
          <a href="#" class="social_box fb">
            <span class="icon"><i class="fa fa-facebook"></i></span>
            <span class="icon_title">Connect with Facebook</span>
            
          </a>

          <a href="#" class="social_box google">
            <span class="icon"><i class="fa fa-google-plus"></i></span>
            <span class="icon_title">Connect with Google</span>
          </a>
        </div>

        <div class="centeredText">
          <span>Or use your Email address</span>
        </div>
        <div>
          By signing up, I agree to OwnFood’s <a href="">Terms of Conditions</a>
        </div>
      </br>

        <div class="action_btns">
          <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
          <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
        </div>
      </div>

      <!-- Username & Password Login form -->
      <div class="user_login">
        <form>
          <label>Email / Username</label>
          <input type="text" />
          <br />

          <label>Password</label>
          <input type="password" />
          <br />

          <div class="checkbox">
            <input id="remember" type="checkbox" />
            <label for="remember">Remember me on this computer</label>
          </div>

          <div class="action_btns">
            <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
            <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
          </div>
        </form>

        <a href="#" class="forgot_password">Forgot password?</a>
      </div>

      <!-- Register Form -->
      <div class="user_register">
        <form>
          <label>Full Name</label>
          <input type="text" />
          <br />

          <label>Email Address</label>
          <input type="email" />
          <br />

          <label>Password</label>
          <input type="password" />
          <br />
          <label>Re-Enter Password</label>
            <input type="password" />
          <br />

          <div class="checkbox">
            <input id="send_updates" type="checkbox" />
            <label for="send_updates">Send me occasional email updates</label>
          </div>

          <div class="action_btns">
            <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
            <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>

<script type="text/javascript">
  $("#trig").leanModal({top : 150, overlay : 0.6, closeButton: ".modal_close" });
  $("#trig1").leanModal({top : 150, overlay : 0.6, closeButton: ".modal_close" });

  $(function(){
    // Calling Login Form
    $("#login_form").click(function(){
      $(".social_login").hide();
      $(".user_login").show();
      return false;
    });

    // Calling Register Form
    $("#register_form").click(function(){
      $(".social_login").hide();
      $(".user_register").show();
      $(".header_title").text('Register');
      return false;
    });

    // Going back to Social Forms
    $(".back_btn").click(function(){
      $(".user_login").hide();
      $(".user_register").hide();
      $(".social_login").show();
      $(".header_title").text('Login');
      return false;
    });

  })
</script>




<div id="banner">
kdjshflsadf
</div>

<div id="content">
sdjfsdlfla
</div>

</body>
</html>