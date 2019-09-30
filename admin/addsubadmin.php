<?php 
include('header.php'); 
if (!isAdmin()) {
  header('location:login.php');
}
 include('sidebar.php'); 
?>

    <div class="container">

      <form class="form-signin" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h2 class="form-signin-heading">CREATE SUB-ADMIN</h2>
		<?//php echo display_error('auth'); ?>
        <div class="login-wrap">
            <p style="text-align: center;">Enter details below </p>
          <input type="text" class="form-control" name="name" placeholder="Name" autofocus>
          <input type="text" class="form-control" name="contact" placeholder="Contact" autofocus>
          <input type="text" class="form-control" name="city" placeholder="City" autofocus>
          <input type="text" class="form-control" name="address" placeholder="Address" autofocus>
          <input type="text" class="form-control" name="email" placeholder="Email" autofocus>  
          <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
			     <?php echo display_error('username'); ?>
          <input type="password" class="form-control" name="password" placeholder="Password">
			     <?php echo display_error('password'); ?>
           <!-- <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label> -->
            <button class="btn btn-lg btn-login btn-block" type="submit" name="add_sub_admin">Submit</button>
         <!--   <p>or you can sign in via social network</p>
            <div class="login-social-link">
                <a href="index.html" class="facebook">
                    <i class="fa fa-facebook"></i>
                    Facebook
                </a>
                <a href="index.html" class="twitter">
                    <i class="fa fa-twitter"></i>
                    Twitter
                </a>
            </div>
            <div class="registration">
                Don't have an account yet?
                <a class="" href="registration.html">
                    Create an account
                </a>
            </div>  -->

        </div>

          <!-- Modal -->
       <!--   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- modal -->
      </form>
    </div>

<?php include("footer.php");  ?>