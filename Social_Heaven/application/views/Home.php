<?php 
  include('header.php');
  
?>
    
    <div class="container-fluid ">
        <div class="jumbotron bg-dark text-center ">
            <h1 class="pt-3 head">
              <span id="s">S</span>
              <span  id="o">o</span>
              <span  id="c">c</span>
              <span  id="i">i</span>
              <span id="a">a</span>
              <span  id="l">l</span>&nbsp;&nbsp;&nbsp;
              <span  id="h">H</span>
              <span  id="e">e</span>
              <span id="a">a</span>
              <span  id="v">v</span>
              <span  id="e">e</span>
              <span  id="n">n</span>
            </h1>
        </div>
        <?php
          if($_SESSION['error']!=""){?>
              <div class="alert alert-danger text-center mt-1" role="alert">
                <?php echo $_SESSION['error'] ?>
              </div><?php
              $_SESSION['error']="";
          }
        
        
        ?>
        <div class="row ">
            <div class="col-md-1"></div>
            <div class="col-md-5 mt-1 text-center">
              
                <img src="<?php echo base_url() ?>assets/img/homepage_image.png" class="mt-5 " id="logo">
                <i id="welcome"><h2 class="float-left text-primary">Welcome To</h2>
                <h3 class="float-right text-primary">Your Own Social Community...</h3></i>
                
            </div>
            
            <div class="col-md-6 mt-5 mx-auto">
                <div class="row justify-content-center">
                    <form class="mt pt-2 col-md-8 col-10" id="login" action="<?php echo base_url() ?>Social_Heaven_Controller/doLogin" method="POST" >
                      <div class="text-center">
                        <img src="<?php echo base_url() ?>assets/img/logo3.jpg" alt="logo" height="100px" width="100px" >
                      </div>
                        <h2>Login</h2><br>

                        <div class="form-group " >
                            <label for="mail">Email :</label>
                            <input id="mail" class="form-control " type="email" name="mail" required>
                            <p id="mail_error" ></p>
							
                        </div>

                        <div class="form-group " >
                            <label for="password">Password :</label>
                            <input id="password" class="form-control " type="password" name="pswrd" required>
							
                        </div>

                        <input type="submit" class="btn btn-danger m-3" value="Login"> 
                        <a href="#" class=" mt-4">Forgot Password</a>
                        <br>
                        <a href="#"   data-toggle="modal" data-target="#signup">
                            Don't have an account ? Sign Up Now !!
                        </a>

                    </form>
                </div>
            </div>

        </div>


        <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="<?php echo base_url() ?>Social_Heaven_Controller/doSignup">
                <div class="form-group">
                    <label for="f_name">First Name</label>
                    <input type="text" class="form-control" id="f_name"  placeholder="Enter first name" name="f_name" required>
                    
                </div>
                <div class="form-group">
                    <label for="l_name">Last Name</label>
                    <input type="text" class="form-control" id="l_name"  placeholder="Enter last name" name="l_name" required>
                    
                </div>
                <div class="form-group">
                    <label for="dob">Date of birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>                    
                </div><br>
                <div >
                    <label for="gender">Gender :&nbsp;&nbsp;&nbsp;&nbsp; </label>
                   <input type="radio"   name="gender" value="male" required> Male&nbsp;&nbsp;
                   <input type="radio"   name="gender" value="female" required> Female  &nbsp;&nbsp;
                   <input type="radio"   name="gender" value="custom" required> Custom  &nbsp;&nbsp;            
                </div>
                <br>
                
                  
                <div class="form-group">
                  <label for="Email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                  
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="signup_password" placeholder="Password" name="password" required>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Sign Up</button>
                </div>
                
               
              </form>
        </div>
        
      </div>
    </div>
  </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/javascript/sh_javascript.js" type="text/javascript" ></script>
    <script>
      $("#mail").blur(function(){

        $.ajax({
          url : "<?php echo base_url() ?>Social_Heaven_Controller/validateMail",
          method : "POST",
          data : {datapost : $("#mail").val() },
          success: function(result){
            $("#mail_error").html(result);
          }

        });

      });





    </script>
  </body>
</html>