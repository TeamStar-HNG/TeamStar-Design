<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <script type="text/javascript" src="script.js"></script>    
    <title>SIGN UP/LOGIN PAGE- Team Star</title>
</head>
<body>    
<main class="mainContainer">  
    <section class="authContainer">
        <div>
            <img class="logo" src="https://res.cloudinary.com/partypack/image/upload/v1568749601/Frame_1_1_tzgejy.png"/> 
            <h4 class="welcomeMessage">Create an Account</h4>
        </div>

        <div class="social-media">
            <a href="https://facebook.com" target="_blank"><img src="https://res.cloudinary.com/partypack/image/upload/c_scale,w_181/v1568628007/facebook_ylbio1.jpg" alt="facebook-logo"/>
                <a href="https://twitter.com" target="_blank"><img src="https://res.cloudinary.com/dzflnjyii/image/upload/v1568741827/twitter_ya44rx.jpg" alt="twitter-logo" class="twit"/></a>  
        </div>

        <div class="or"><p>-OR-</p> </div>
               <?php if(isset($_GET['err'])) { ?>
  <div class="alert alert-dismissable alert-<?php echo $_GET['err']; ?>">
    <button data-dismiss="alert" class="close" type="button">x</button>
    <p><?php echo $_GET['msg']; ?></p>
  </div>
<?php } ?> 
        <div class="card card-body bg-light">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-register-tab" data-toggle="tab" href="#nav-register" role="tab" aria-controls="nav-register" aria-selected="true">Register</a>
                  <a class="nav-item nav-link" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login" aria-selected="false">Login</a>
                </div>
            </nav>
  
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-register" role="tabpanel" aria-labelledby="nav-register-tab">

        <form action= "./process.php"  onsubmit= "return validate()" method="post">
    
            <label for="firstname-label" id="firstname">First Name</label>
            <br>
            <input type="text" id="firstname-label" name="fname" placeholder="e.g Morgan"  minlength="4" required>
            <br>
            <label for="lastname-label" id="lastname">Last Name</label>
            <br>
            <input type="text" id="lastname-label" name="lname" placeholder="e.g Freeman"  required>
            <br><br>
            <label for="email-label" id="email">Email Address</label>
            <br>
            <input type="email" id="email-label" name="email" placeholder="Enter valid email"  required>
            <br><br>  
            <label for="password-label" id="password">Password</label>
            <br>
            <input type="password" id="password-label" name="password" placeholder="********************" minlength="8" maxlength="14" required>
            <br><br>
            <label for="confirmpassword" id="password2">Confirm Password</label>
            <br>
            <input type="password" id="confirmpassword" name="confirm-password" placeholder="********************" minlength="8" maxlength="14" required>
            <br><br>
            <input class="button"  type="submit" name="submitReg" value="Create Account">           
        </form>  
        <p class="footer-star">Already have an account?<a href="login.php">    Login here</a></p>      
    </div>

    <div class="tab-pane fade" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
        <form action= "./processlog.php"  method="post" onsubmit= "return validate()">        
            <label for="email-label" id="email" class="label">Email Address</label>
            <br>
            <input type="email" id="email-label" name="email-address" placeholder="Enter valid email" autofocus required>
            <br><br>
            <label for="password-label" id="password">Password</label>
            <br>
            <input type="password" id="password-label" name="password" placeholder="********************" minlength="8" required>
            <br><br>
            <div class="checkbox">                 
                <label for="remember-me">
                <input id="remember-me" type="checkbox" name="remember" value="Remember me">Remember me</label>
                <p><a href="">Forgot Password?</a></p>
            </div>
            <input class="button" type="submit" name="submitLog" value="Log in">
            <p class="footer-star">Need a Team Star account?<a href="">Create an account</a></p>
        </form>
    </div>
</div>
</div>   

        <footer class="footer">                    
                <p class="copyright">&copy 2019 All Rights Reserved. Team Star</p>
                <p>Cookie Preference,<a href=""> Privacy Policy</a>,<a href=""> Terms and Conditions</a></p>
        </footer>
    </section>

      <section class="landingContainer">
            <div>
                <div id="landingCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#landingCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#landingCarousel" data-slide-to="1"></li>
                  <li data-target="#landingCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://res.cloudinary.com/dga2j4uiv/image/upload/v1568891118/carousel.png" class="d-block w-100" alt="carousel image">
                  </div>
                  <div class="carousel-item">
                    <img src="https://res.cloudinary.com/dga2j4uiv/image/upload/v1568889910/carousel2.png" class="d-block w-100" alt="carousel image">
                  </div>
                  <div class="carousel-item">
                    <img src="https://res.cloudinary.com/dga2j4uiv/image/upload/v1568890785/carousel3.png" class="d-block w-100" alt="carousel image">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#landingCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#landingCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>               
              </div>
            </div>
        </section>
    </main>

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
      </html>
    
    
</body>
</html>
