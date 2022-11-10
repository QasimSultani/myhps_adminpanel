<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>>Hps VR</title>
  <!-- General CSS Files -->
<?php include 'include/links.php';?>
</head>
<style>
div {
  background-image: url('img.jpg');
}
</style>
<body  style="background-image: url('assets/img/1234.jpg');">
  <div class="loader"></div>
  <div id="app">
     <br>
    <h5 class="hi">WELCOME TO HPS VR</h5>
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
           
              <div class="card-header">
                <h4 class="hihello">Register</h4>
              </div>
              <div class="card-body">
                <form method="POST">
                    <div class="form-group col-12">
                      <label for="name"> Name</label>
                      <input id="name" type="text" class="form-control" name="name" autofocus>
                    </div>
                  
                  <div class="form-group col-12">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                    <div class="form-group col-12">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                    <div class="form-group col-12">
                    <label for="confirm_password">Confirm Password</label>
                    <input id="confirm_password" type="password" class="form-control" name="confirm_password">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="auth-login.php">Login</a>
              </div>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <?php include 'include/scripts.php';?>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>