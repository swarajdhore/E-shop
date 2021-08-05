
<link href="style.css" rel="stylesheet">
<!-- Modal -->
  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>LOGIN</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="login_submit.php" method="POST">
              <p>Already a member? <a href="signup.php">Sign Up</a></p>
            <div class="form-group">
              <input type="email" class="form-control"  name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <?php if(isset($_GET["error"])){ echo $_GET['error'];} ?><br>
           <button type="submit" class="btn btn-default btn-primary"> Login</button><br>
          
          <p><a href="forgot.php">Forgot Password?</a></p>
          
          </form>
            </div>
        </div>
    </div>
      </div>
    
  

