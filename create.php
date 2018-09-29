<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>ProxiChats</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">ProxiChats</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="login.php">Login</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="create.php">Create Account</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Create Account</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Name" id="name" type="text" class="validate">
          <label for="name"></label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Username" id="username" type="text" class="validate">
          <label for="username"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Email" id="email" type="text" class="validate">
          <label for="email"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Phone Number" id="phone_number" type="text" class="validate">
          <label for="phone_number"></label>
        </div>
        <div class="input-field col s1">
          <input placeholder="Day" id="day" type="text" class="validate">
          <label for="day"></label>
        </div>
        <div class="input-field col s3">
          <input placeholder="Month" id="month" type="text" class="validate">
          <label for="month"></label>
        </div>
        <div class="input-field col s1">
          <input placeholder="Year" id="year" type="text" class="validate">
          <label for="year"></label>
        </div>
        <div class="input-field col s1">
          <input placeholder="Gender" id="gender" type="text" class="validate">
          <label for="gender"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Password" id="password" type="password" class="validate">
          <label for="password"></label>
        </div>
        <div class="input-field col s6">
            <input placeholder="Confirm Password" id="confirm_password" type="password" class="validate">
            <label for="confirm_password"></label>
        </div>
      </div>
      <div class="row center">
      <form action="#">
          <p>
            <label>
              <input type="checkbox" />
              <span>Terms and Conditions</span>
            </label>
          </p>
      </form>
    </div>
      <div class="row center">
        <a href="proximity.php" id="download-button" class="btn-large waves-effect waves-light orange">Create Account</a>
    </form>
  </div>

    <br><br>
  </div>

  <?php include "footer.php" ?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
