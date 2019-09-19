<?php

require_once('db.php');

/* Process login form */
if (isset($_POST['submitLog'])) {
    // Get form data and store in variable
    $email = mysqli_real_escape_string($con, $_POST['email-address']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // The password was encrypted by salting the inputed password
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // Validate user input
    if (empty($email) || empty($password)) { // Check if the form is empty
        header('Location: index.php?err=danger &msg=empty-field');
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validate user email
        header('Location: index.php?err=warning &msg=invalid-email');
        exit();
    } else {
        // Log in the user if no error
        $query = "SELECT * FROM users WHERE email = '$email'";
        $results = mysqli_query($con, $query);

        // Check if user is registered
        if (!mysqli_num_rows($results) == 1) {
            header('Location: index.php?err=warning &msg=User does not exist');
            exit();
        } else {
           
            while ($row = mysqli_fetch_assoc($results)) {
                $pwdCheck = password_verify($password, $row['password']);
                if ($pwdCheck == false) {
                    header('Location: index.php?err=danger &msg=wrong-password');
                    exit();
                } elseif ($pwdCheck == true) {
                    $id = $row['id'];
                    $email = $row['email'];
                    $firstname = $row['firstname'];

                    session_start();
                    $_SESSION['id'] = $id;
                    $_SESSION['email'] = $email;
                    $_SESSION['firstname'] = $firstname;

                    header("location: home.php?success");
                } else {
                header('Location: index.php?err=danger &msg=wrong-password');
                exit();
            }
            }

          
        }

    }
} else {
    header('Location: index.php?try-again');
    exit();
}
