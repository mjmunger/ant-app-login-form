<!DOCTYPE html>
<html>
<head>
  <!--CSS Style Sheets-->
  <?php $AppEngine->runActions('header-inject-css'); ?>
  <!-- End CSS Style Sheets -->

  <!-- Injected Javascript / jQuery -->
  <?php $AppEngine->runActions('header-inject-js'); ?>
  <!-- End Javascript / jQuery -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php $configs = $AppEngine->Configs->getConfigs(['siteTitle']); echo $configs['siteTitle']; ?></title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
form label.checkbox {
    margin-left: 1.5%;
}
</style>
</head>
<body>
<div class="container">
  <p class="text-center"><!-- Cord to get site logo could go here: --></p>
  <form class="form-signin" role="form" method="post">
    <h2 class="form-signin-heading text-center">Please sign in</h2>
    <input type="text" class="form-control" name="username" id="username" placeholder="Network logon (i.e. john)" required autofocus>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
    <label class="checkbox">
      <input type="checkbox" value="remember-me" name="remember" id="remember" checked> Remember me
    </label>
    <button class="btn btn-lg btn-andretti btn-block" type="submit">Sign in</button>
  </form>
  <br>
  <p align="center"><b>Login doesn't work?</b></p>
  <p align="center"> Make sure you're using the same username and password you use to log into your computer. Still need help? Contact <a href="mailto:michael@highpoweredhelp.com">support</a>.</p>
</div> <!-- /container -->
<?php $AppEngine->runActions('end-container'); ?>
</div><!-- End Container -->
<footer>

<?php $AppEngine->runActions('footer-open'); ?>

<?php $AppEngine->runActions('footer-close'); ?>

</footer>


<?php $AppEngine->runActions('footer-inject-js'); ?>
</body>
</html>
