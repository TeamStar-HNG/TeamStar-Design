<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Form submitted</title>
    <style>
        body   {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-align: center;
                background-color: #8366CC;
                background-repeat: no-repeat;
            
            }
    
        #star {
           
            
            font-size: 55px;
                color: whitesmoke;
                padding-top: 255px;
                font-weight: 500;
        }
    </style>
            
</head>
<body>
        <div id="star"> </div> 
    <?php
require_once 'db.php';
session_start();
if(!isset($_SESSION["id"])){
header("Location: index.php");
exit(); }
$id=$_SESSION['id'];
$sql = "SELECT firstname, lastname FROM users WHERE id =$id";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Welcome " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        echo '';
    }
} else {
    echo "0 results";
}

?>
<div class="form">
<p>This is secure area.</p>
<a href="logout.php">Logout</a>
</div>
    <script>
    let word = "Welcome to Team Star.....";
            setInterval(function(){
                word = word.charAt(word.length-1) + word.substring(0,word.length-1);
              
                document.getElementById("star").innerHTML = word;
            }, 350)

    </script>
    

</body>
</html>  
