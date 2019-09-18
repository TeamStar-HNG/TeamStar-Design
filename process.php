<?php

require_once('db.php');


/* Process Registration form */
// if (isset($_POST['submitReg'])) {
//     // Get form data and store in variable
//     $firstname = mysqli_real_escape_string($con, $_POST['fname']);
//     $lastname = mysqli_real_escape_string($con, $_POST['lname']);
//     $email = mysqli_real_escape_string($con, $_POST['email']);
//     $password = mysqli_real_escape_string($con, $_POST['password']);
//     $confrim_password = mysqli_real_escape_string($con, $_POST['confrim-password']);

//     // The password was encrypted by salting the inputed password
//     $passwordHash = password_hash($password, PASSWORD_DEFAULT);

//     // Validate user input
//     if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confrim_password)) { // Check if the form is empty
//         header('Location: register.php?err=empty-field');
//         exit();
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validate user email
//         header('Location: register.php?err=invalid-email');
//         exit();
//     } else {
//         // Check if the user email is already taken
//         $query = "SELECT * FROM users WHERE email = '$email'";
//         $results = mysqli_query($con, $query);
//         $row = mysqli_num_rows($results);
//         if ($row == 1) {
//             header('Location: register.php?err=email-taken');
//             exit();
//         } else {
//             // Register the user
//             $query = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$passwordHash')";
//             if (!mysqli_query($con, $query)) {
//                 header('Location: register.php?err=SQL-error');
//                 exit();
//             } else {
//                 header('Location: register.php?success');
//                 exit();
//             }
//         }
//     }
// } else {
//     header('Location: register.php?try-again');
//     exit();
// }

/* Process login form */
if (isset($_POST['submitLog'])) {
    // Get form data and store in variable
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // The password was encrypted by salting the inputed password
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Validate user input
    if (empty($email) || empty($password)) { // Check if the form is empty
        header('Location: index.php?err=empty-field');
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validate user email
        header('Location: index.php?err=invalid-email');
        exit();
    } else {
        // Log in the user if no error
        $query = "SELECT * FROM users WHERE email = '$email'";
        $results = mysqli_query($con, $query);
        $row = mysqli_num_rows($results);

        // Check if user is registered
        if (!$row == 1) {
            header('Location: index.php?err=user-not-found');
            exit();
        } else {
            if(!password_verify($password, $passwordHash)){
                header('Location: index.php?err=wrong-password');
                exit();
			} else {
                session_start();

				$id = $_SESSION['uid'];
				$email = $_SESSION['email'];

				header('location: home.php?success');
            }
        }
    }
} else {
    header('Location: index.php?try-again');
    exit();
}