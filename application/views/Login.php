<html lang="en"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>My Electrician Online Login</title>
  <link rel="stylesheet" href="<?= base_url('asset/css/new-login.css') ?>">
  <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css') ?>">
  <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-offset-3 col-sm-6">
        <form action="" class="" method="post"> 
          <div class="text-center" style="text-align:center">
            <img src="<?= base_url('asset/img/ai-lighting.png') ?>" alt="" style="width:250px;margin-top:50px;margin-bottom:30px;">
          </div>
          <input type="email" name="email" class="form-control input-md email" required="" placeholder="Email Address" autofocus="">
          <input type="password" name="password" class="form-control input-md password" required="" placeholder="Password">
          <input type="submit" value="Sign in" class="login-submit">
          <p class="login-help"><a href="http://localhost/ailighting/index.php/authcontroller/forgot_password">Forgot password?</a></p>
        </form>
      </div>
    </div>
  </div>
</body></html>