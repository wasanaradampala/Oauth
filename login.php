<?php
    require_once "config.php";

    //if person is already authorized then rrdirect to the index
	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$GoogleLoginURL = $googleClient->createAuthUrl();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OAuth</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">
             <h1>Login Form</h1>

                <img src="user.png" alt="User" class="user" style="width:128px;height:128px;"><br><br>

                <form >
                    <input placeholder="Email..." name="email" class="form-control"><br>
                    <input type="password" placeholder="Password..." name="password" class="form-control"><br>
                    <input type="submit" value="Log In" class="btn btn-primary">
                    <input type="button" value="Log In With Google" class="btn btn-danger"onclick="window.location = '<?php echo $GoogleLoginURL ?>';" >
                </form>

            </div>
        </div>
    </div>
</body>
</html>