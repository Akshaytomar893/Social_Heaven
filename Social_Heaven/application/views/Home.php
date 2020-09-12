<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css" >
    <title>Hello, world!</title>

    <style>
        
    </style>

  </head>
  <body >
    
    <div class="container-fluid ">
        <div class="jumbotron bg-dark text-center text-white">
            <h1 class="pt-3 head">
              <span id="0">S</span>
              <span  id="1">o</span>
              <span  id="2">c</span>
              <span  id="3">i</span>
              <span id="4">a</span>
              <span  id="5">l</span>&nbsp;&nbsp;&nbsp;
              <span  id="6">H</span>
              <span  id="7">e</span>
              <span id="8">a</span>
              <span  id="9">v</span>
              <span  id="10">e</span>
              <span  id="11">n</span>
            </h1>
        </div>
        <div class="row ">
            <div class="col-md-1"></div>
            <div class="col-md-5 mt-1 text-center">
              
                <img src="<?php echo base_url() ?>assets/img/homepage_image.png" class="mt-5 " id="logo">
                <i id="welcome"><h2 class="float-left text-primary">Welcome To</h2>
                <h3 class="float-right text-primary">Your Own Social Community...</h3></i>
                
            </div>
            
            <div class="col-md-6 mt-5 mx-auto">
                <div class="row justify-content-center">
                    <form class="mt pt-2 col-md-8 col-10" id="login">
                      <div class="text-center">
                        <img src="<?php echo base_url() ?>assets/img/logo3.jpg" alt="logo" height="100px" width="100px" >
                      </div>
                        <h2>Login</h2><br>

                        <div class="form-group " >
                            <label for="username">Username :</label>
                            <input id="username" class="form-control " type="text" name="username">
                            
                        </div>

                        <div class="form-group " >
                            <label for="password">Password :</label>
                            <input id="password" class="form-control " type="password" name="password">
                            
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
            <form>
                <div class="form-group">
                    <label for="f_name">First Name</label>
                    <input type="text" class="form-control" id="f_name"  placeholder="Enter first name">
                    
                </div>
                <div class="form-group">
                    <label for="l_name">Last Name</label>
                    <input type="text" class="form-control" id="l_name"  placeholder="Enter last name">
                    
                </div>
                <div class="form-group">
                    <label for="dob">Date of birth</label>
                    <input type="date" class="form-control" id="dob"  >                    
                </div><br>
                <div >
                    <label for="gender">Gender :&nbsp;&nbsp;&nbsp;&nbsp; </label>
                   <input type="radio"  id="gender" name="gender" value="male" > Male&nbsp;&nbsp;
                   <input type="radio"  id="gender" name="gender" value="female" > Female  &nbsp;&nbsp;
                   <input type="radio"  id="gender" name="gender" value="custom" > Custom  &nbsp;&nbsp;            
                </div>
                <br>
                
                  
                <div class="form-group">
                  <label for="Email">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                  
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                
               
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Sign Up</button>
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
    <script src="<?php echo base_url() ?>assets/javascript/sh_javascript.js" type="text/javascript" ></script>
  </body>
</html>