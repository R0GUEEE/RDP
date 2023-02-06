<!DOCTYPE html>
<html lang="en">

<head>
  <script src="dmxAppConnect/dmxAppConnect.js"></script>
  <base href="/">
  <meta charset="utf-8">
  <title>Sign in </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Le styles -->
  <style type="text/css">
    body {}

    .form-signin {}

    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 10px;
    }

    .form-signin input[type="text"],
    .form-signin input[type="password"] {
      font-size: 16px;
      height: auto;
      margin-bottom: 15px;
      padding: 7px 9px;
      border-radius: 5px;
      border: 2px solid #6BC4EA;
    }
  </style>
  <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script src="../../Third Party Source Code/bootstrap/js/html5shiv.js"></script>
    <![endif]-->
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="bootstrap/ico/favicon.png">
  <style type="text/css">
    .container1 {
      outline: 1px dashed #999;
    }

    .container1 {
      width: 1170px !important;
    }

    .container-fluid1 {
      outline: 1px dashed #999;
    }
  </style>
  <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>
  <link rel="stylesheet" href="fontawesome4/css/font-awesome.min.css" />
  <link rel="stylesheet" href="bootstrap/4/css/bootstrap.min.css" />
  <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body is="dmx-app" id="login">
  <div is="dmx-browser" id="browser1"></div>

  <div class="ml-auto mr-auto pt-5 pb-5 pl-5 pr-5 container-fluid style4">
    <main class="style3 mt-auto mb-auto ml-auto mr-auto container bg-light">

      <img src="assets/images/acima%20logo.png" class="style6">
      <form class="form-signin style1" method="post" is="dmx-serverconnect-form" id="serverconnectform1" action="dmxConnect/api/login.php" dmx-on:success="browser1.goto('google.com')" dmx-on:unauthorized="browser1.alert('Try Again')" dmx-on:reset="browser1.goto('registration.php')">
        <h1 class="style8">Portal</h1>
        <input type="text" class="input-block-level style14" placeholder="Email address" id="email" name="email">
        <input type="password" class="input-block-level style15" placeholder="Password" id="password" name="password">
        <button class="btn btn-large style11 text-center mt-2 mb-2 btn-primary" type="submit" id="submit">Sign in</button><button id="register" class="btn bg-primary text-light style10 mt-2 mb-2 btn-primary" type="reset">Register</button>

      </form>
    </main>



  </div> <!-- /container -->

  <script src="bootstrap/4/js/popper.min.js"></script>
  <script src="bootstrap/4/js/bootstrap.min.js"></script>
</body>

</html>