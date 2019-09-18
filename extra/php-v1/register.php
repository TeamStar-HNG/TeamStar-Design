<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <title>HNG Team Star</title>   

</head>
<body>
    <div class="container">  
        <div class="firstpage">
            <div>
                <h3>Team Star</h3>
                <p>Create your account</p>
            </div>

        <!-- <div class="social-media">
                <img src="https://res.cloudinary.com/partypack/image/upload/c_scale,w_181/v1568628007/facebook_ylbio1.jpg" alt="facebook-logo"/>
                <img src="https://res.cloudinary.com/partypack/image/upload/c_scale,w_181/v1568628007/facebook_ylbio1.jpg" alt="twitter-logo"/>                
        </div> -->

        <form action= "process.php" method="post" onsubmit= "return validateLogin()">
                <p>-OR-</p>                
                <label for="text-label" id="text">First name</label>
                <br>
                <input type="text" id="email-label" name="fname" placeholder="First name"  required>
                <br><br>
                <label for="text-label" id="text">Last name</label>
                <br>
                <input type="text" id="email-label" name="lname" placeholder="Last name"  required>
                <br><br>
                <label for="email-label" id="email">Email Address</label>
                <br>
                <input type="text" id="email-label" name="email" placeholder="Enter valid email"  required>
                <br><br>
                <label for="password-label" id="password">Password</label>
                <br>
                <input type="password" id="password-label" name="password" placeholder="********************" minlength="8" required>
                <br><br>
                <label for="password-label" id="password">Confrim Password</label>
                <br>
                <input type="password" id="password-label" name="confrim-password" placeholder="********************" minlength="8" required>
                <br><br>

            <div class="checkbox">                 
                <label for="remember-me">
                <input id="remember-me" type="checkbox" name="remember" value="Remember me">Remember me</label>
                <p><a href="">Forgot Password?</a></p>                
            </div>

                <input class="button" name="submitReg" type="submit" value="Create an account">
                
        </form>
        <footer>
                <p class="footer-star">Need a Team Star account?<a href="">    Create an account?</a></p>
                <p>&copy 2019 All Rights Reserved. Team Star</p>
                <p>Cookie Preference,<a href=""> Privacy Policy</a>,<a href=""> Terms and Conditions</a></p>
        </footer>
    </div>

    <div class="secondpage">
        <div class="mini-secondpage">
            <img src="https://res.cloudinary.com/partypack/image/upload/c_scale,w_800/v1568635127/undraw_Group_chat_unwm_qpnq3a.svg" alt="pic of team collaboration"  />
            <h3>Team Collaboration</h3>
            <p>Team collaboration is important for a reason - </p>
            <p>it delivers results. Create, Share & Collaborate, on projects all in one place</p>
        </div>
    </div>

</div>

</body>
</html>


<script type="text/javascript">
function validateLogin()  {
    let validemail = document.getElementById('email-label').value; 
    let validpassword = document.getElementById('password-label').value;

    if(validEmail == "") {
        alert ("Please provide a value");
        return false;
    }else if(validpassword == "") { 
        alert ("Please provide a value");
        return false;
    }else {
        return true;
    }
};
</script>
                     