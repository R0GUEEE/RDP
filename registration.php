<!doctype html>
<html>

<head>
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body is="dmx-app" id="registration" class="appbg">
    <div class="container-fluid style4">
        <main class="text-center style3 bg-white">
            <h1 class="style8">Registration</h1>
            <form id="registration" method="post" is="dmx-serverconnect-form" class="style1">
                <textarea id="fisrtname" class="form-control style14" name="firstname" value="First Name"></textarea>
                <form is="dmx-serverconnect-form" id="serverconnectform1" method="post"></form>
            </form>

        </main>
    </div>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>