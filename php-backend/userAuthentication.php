<?php
include '../connection.php';

$a = $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['username'];
$d = md5($_POST['password']);
//$e = md5($_POST['cpassword']);
if ($a == "" || $b == "" || $c == "" || $d == "") {
    //if ($a == "" || $b == "" || $c == "" || $d == "" || $e == "") {
    // echo "<div id='alert' >Some Fields Are Empty</div>";
    // echo "<script type='text/javascript'>
    //         setTimeout(function() {
    //             document.getElementById('alert').style.display = 'none';
    //         }, 2000);
    //       </script>";
    echo 5;

    // } else if ($d != $e) {
//     echo "<div id='alert'>Password And Confirm Password Doesn't Match</div>";
//     echo "<script type='text/javascript'>
//         setTimeout(function() {
//             document.getElementById('alert').style.display = 'none';
//         }, 3000);
//       </script>";
// } 
} else {
    // Check if username already exists
    $query = "SELECT * FROM users WHERE username='$c'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        //     echo "<div id='alert'>Username not available</div>";
        //     echo "<script type='text/javascript'>
        //     setTimeout(function() {
        //         document.getElementById('alert').style.display = 'none';
        //     }, 3000);
        //   </script>";
        echo 1;

    } else {
        // Insert new user
        $query = "INSERT INTO users(first_name, last_name, username, password) VALUES('$a','$b','$c','$d')";
        $run = mysqli_query($conn, $query);
        if ($run == true) {
            // echo "<div id='alert success' class='alert-success'>Sign up successful!</div>";
            // echo "<script type='text/javascript'>
            //         setTimeout(function() {
            //             document.getElementById('alert').style.display = 'none';
            //         }, 3000);
            //       </script>";
            echo 3;

        } else {
            // echo "<div class='alert alert-danger'>Error found!</div>";
        }
    }
}

//echo "<div id='alert'><i class='fas fa-exclamation-triangle'></i> Username not available</div>"
?>