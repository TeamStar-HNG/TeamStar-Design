<?php

require_once('db.php');


/* Process Registration form */
 if (isset($_POST['submitReg'])) {
    // Get form data and store in variable
    $firstname = mysqli_real_escape_string($con, $_POST['fname']);
     $lastname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm-password']);

    // The password was encrypted by salting the inputed password
     $passwordHash = password_hash($password, PASSWORD_DEFAULT);
     // Validate user input
     if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password)) { // Check if the form is empty
        header('Location: index.php?err=warning &msg=Empty-field');
        
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validate user email
         header('Location: index.php?err=danger &msg=Invalid-email');
        exit();
     } else {
        // Check if the user email is already taken
        $query = "SELECT * FROM users WHERE email = '$email'";
         $results = mysqli_query($con, $query);
         $row = mysqli_num_rows($results);
        if ($row == 1) {
             header('Location: index.php?err=warning &msg=Email is taken');
             exit();
         } else {
             // Register the user
            $query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$passwordHash')";
            if (!mysqli_query($con, $query)) {
                 header('Location: index.php?err=danger &msg=SQL-error');
                exit();
             } else {
                header('Location: index.php?err=success &msg=Your Account has been created successfully');
                 exit();
            }
        }
     }
 } else {
     header('Location: index.php?err=warning &msg=Try-again');
     exit();
 }

?>