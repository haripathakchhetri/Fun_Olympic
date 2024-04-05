<?php
session_start();
    include('config/connection.php');

    if (isset($_POST["login"])) {
        $username = mysqli_real_escape_string($conn, trim($_POST['username']));
        $password = trim($_POST['password']);
    
        if (empty($username) && empty($password)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 150px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter both username and password.</p>';
        } elseif (empty($username)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 240px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter your username.</p>';
        } elseif (empty($password)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 240px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter your password.</p>';
        } else {

              // Default admin credentials
        $default_admin_username = "admin";
        $default_admin_password = "password";

        if ($username === $default_admin_username && $password === $default_admin_password) {
            // Default admin credentials matched, redirect to admin panel
            $_SESSION['username'] = $username;
            header("Location: admin/main.php");
            exit();

        } else {

            // Process login non-empty username and password
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
            $count = mysqli_num_rows($sql);
    
                $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
                $count1 = mysqli_num_rows($sql1);
    
                if ($count1 > 0) {
                    $fetch1 = mysqli_fetch_assoc($sql1);
                    $hashpassword1 = $fetch1["password"];
    
                    if ($fetch1["status"] == 0) {
                        $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 100px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please verify your email account before logging in.</p>';
                    } elseif (password_verify($password, $hashpassword1)) {
                        $_SESSION['username'] = $username;
                        echo '<script> alert("Login Successfully");
                        window.location.href = "home.php";
                        </script>';
                        exit();
                    } else {
                        $login_error = '<p style="text-align: center; margin-right: 110px; color: #FF0000; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Invalid username or password, please try again.</p>';
                    }
                } else {
                    $login_error = '<p style="text-align: center; margin-right: 253px; color: #FF0000; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Username does not exist.</p>';
                }
            }
        }
     }  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payris FunOlympic 2024</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css\register.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   

    <!-- Add this script at the end of your HTML body -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.forms["login"].addEventListener("submit", function (event) {
                var captchaInput = document.getElementById("captcha");
                var captchaValue = captchaInput.value.trim();

                if (captchaValue === "") {
                    alert("Please enter the captcha.");
                    event.preventDefault();
                    return;
                }

                var captchaVerificationURL = "captcha_verify.php?vercode=" + encodeURIComponent(captchaValue);

                var xhr = new XMLHttpRequest();
                xhr.open("GET", captchaVerificationURL, true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = xhr.responseText;

                        if (response === "success") {
                            // Captcha is correct, proceed with form submission
                            alert("Login Successful");
                        } else {
                            // Captcha is incorrect, prevent form submission
                            alert("Incorrect Captcha. Please try again.");
                            event.preventDefault();
                        }
                    }
                };

                xhr.send();

            });
        });
    </script>


</head>

<body>
    <!-- navbar -->

    <!-- navbar start -->
    <nav class="navbar navbar-expand-md text-white bg-primary">
        <div class="container text-white">
            <a href="index.php" class="navbar-brand text-white"><img src="img\logowithnobg.png" style="width:80px; height:50px"
                    alt=""> Payris Fun Olympics 2024</a>

        </div>
    </nav>

    <!-- login form starts -->

     <!-- Signup panel start -->
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-info">

                    <div class="panel panel-heading">
                        <h2>Login Using Username and Password</h2>
                    </div>

                    <div class="panel panel-body">
                        <form method="POST" action="#" name="login">

                            

                            <div class="form-group">
                                <label for="username"><Strong>Username</Strong></label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Enter Your Username" required>
                            </div>

                            <div class="form-group" 
                            >
                                <label for="password"><Strong>Password</Strong></label>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Enter Password" required>
                                

                            </div>
                           

                            <br>

                            <?php if (isset($login_error)) echo $login_error; ?>

                            <div class="forgotpass" style="color:red; margin-left: 10px" >
                                <a href="recoverpassword.php" style="color:red;">
                                    Forgot password?
                                </a>
                            </div>
                            
                            <br>
                            <div class="g-recaptcha " style=" font-size:15px;margin-top:20px; margin-left: 10px; " data-sitekey = "6Lczq50pAAAAAI1JZ-gkjVAiZaEvgjQ-clC4CXkZ"></div>


                        <div class="form-group" style="margin-top:10px">
                                <button  class="btn btn-primary btn-lg" 
                                value="login"
                                name="login">Login</button>
                                <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
                            </div>

                        <div class="already-have-account" style=" font-size:15px;margin-top:20px; margin-left: 10px; ">
                            <p>Don't have an account? <a href="register.php" style="color:green">Signup</a></p>
                        </div>



                        </form>

                        
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>