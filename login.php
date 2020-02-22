
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
      <h4 class="card-title mt-3 text-center">  Login</h4>
      <form method="post" action="login.php">
	  <?php include('errors.php'); ?>
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
          </div>
          <input
           id="name"
            name="username"
            class="form-control"
            placeholder="Username"
            type="text"
          />
        </div>
        <!-- form-group end.// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
          <input
            class="form-control"
            placeholder="Password"
            type="password"
            id= "password"
			name="password"
          />
        </div>
		
        <!-- form-group// -->
        <div class="form-group">
          <button type="submit" class="btn btn-primary  btn-block" name="login_user">
            Login
          </button>
        </div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
      </form>
    </article>
  </div>

</div>

</body>
</html>


