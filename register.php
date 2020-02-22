<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link
  rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous"
/>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
/>
<link href="RegisterPage.css" rel="stylesheet" />
</head>
<body>
<div class="container">
  <br />

  <hr />

  <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
      <h4 class="card-title mt-3 text-center">  Sign Up</h4>

      <p>
        <a href="" class="btn btn-block btn-twitter">
          <i class="fab fa-twitter"></i> Login via Twitter</a
        >
        <a href="" class="btn btn-block btn-facebook">
          <i class="fab fa-facebook-f"></i> Login via facebook</a
        >
      </p>
      <p class="divider-text">
        <span class="bg-light">OR</span>
      </p>
       <form method="post" action="register.php">
		<?php include('errors.php'); ?>
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
          </div>
		    	  <input type="text" placeholder="Username" class="form-control" name="username" value="<?php echo $username; ?>">
        </div>
        <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
		   <input type="email" placeholder="Email address" class="form-control" name="email" value="<?php echo $email; ?>">
        </div>
        <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
         
        </div>
        <!-- form-group end.// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input
            class="form-control"
            placeholder="Create password"
			name="password_1"
            type="password"
            id= "password"
          />
        </div>
        <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input
            class="form-control"
            placeholder="Repeat password"
            type="password"
            id="cpassword"
			name="password_2"
          />
        </div>
        <!-- form-group// -->
        <div class="form-group">
          <button type="submit" name="reg_user" class="btn btn-primary  btn-block">
            Register
          </button>
        </div>
        <!-- form-group// -->
        <div class="form-group col-md-4" >

            <a  class="btn btn-primary  btn-block" role="button" href ="index.html">
                    Back
                </a>
    </div>
      </form>
    </article>
  </div>

</div>

</body>
</html>

