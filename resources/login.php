<!DOCTYPE html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>

.login.logo {
    margin: auto;
    text-align: center;
    width: 25%;
}

.form-signin label.checkbox {
    margin-left: 2rem;
}

@media (max-width:420px) {
    .login.logo {
        width: 85%;
    }

    img.maintenenace.logo {
        width: 85%;
    }
}

@media (max-width:800px) {
    .login.logo {
        width: 50%;
    }

    img.maintenenace.logo {
        width: 50%;
    }

}

@media (min-width:48rem) {
  .login-form {
        width: 40rem;
        margin-left: auto;
        margin-right: auto;
    }
}
      
    </style>

    <!--CSS Style Sheets-->
    <?php //$AppEngine->runActions('header-inject-css'); ?>
    <!-- End CSS Style Sheets -->

    <!-- Injected Javascript / jQuery -->
    <?php //$AppEngine->runActions('header-inject-js'); ?>
    <!-- End Javascript / jQuery -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <div class="container">
    <p class="text-center"><img src="/img/bugzy-logo.png" class="login logo"/></p>
    <div class="login-form">
      <form class="form-signin" role="form" method="post">
        <h2 class="form-signin-heading text-center">Please sign in</h2>
        <input type="text" class="form-control" name="username" id="username" placeholder="Email address" required autofocus>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me" name="remember" id="remember" checked> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      <p align="center"><a href="reset.php">Forgot Your Password?</a></p>
    </div> <!-- /login-form -->
  </div> <!-- /container -->
</html>