<?php session_start(); ?>
<?php
include('config/connection.php');

if (isset($_POST["register"])) {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $country = $_POST["country"];
    $sports = $_POST["sports"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $check_query = mysqli_query($conn, "SELECT * FROM users where email ='$email'");
    $rowCount = mysqli_num_rows($check_query);

    if (!empty($email) && !empty($password)) {
        if ($rowCount > 0) {
            ?>
            <script>
                alert("User with email already exist!");
            </script>
            <?php
        } else {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            $result = mysqli_query($conn, "INSERT INTO users (fullname, username, email, phone_number, country, sports, password,  status) VALUES
                ('$fullname','$username', '$email','$phone_number', '$country', '$sports', '$password_hash', 0)");

            if ($result) {
                $otp = rand(100000, 999999);
                $_SESSION['otp'] = $otp;
                $_SESSION['mail'] = $email;
                require "Mail/phpmailer/PHPMailerAutoload.php";
                $mail = new PHPMailer;

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';

                
                $mail->Username = 'pathakhari496@gmail.com';
                $mail->Password = 'lwbf tizz tcek zmov';

                $mail->setFrom('pathakhari496@gmail.com', 'OTP Verification');
                $mail->addAddress($_POST["email"]);

                $mail->isHTML(true);
                $mail->Subject = "Your verify code";
                $mail->Body = "<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>";

                if (!$mail->send()) {
                    ?>
                    <script>
                        alert("<?php echo "Register Failed, Invalid Email " ?>");
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                        window.location.replace('verification.php');
                    </script>
                    <?php
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Payris FunOlympic 2024</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css\register.css">
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
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-md text-white bg-primary">
        <div class="container text-white">
            <a href="index.php" class="navbar-brand text-white"><img src="img\logowithnobg.png"
                    style="width:80px; height:50px" alt=""> Payris Fun Olympics 2024</a>

        </div>
    </nav>


    <!-- Signup panel start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-info">

                    <div class="panel panel-heading">
                        <h2>Signup Using Email</h2>
                    </div>

                    <div class="panel panel-body">
                        <form method="post" action="#" name="register">

                            <div class="form-group">
                                <label for="fullname"><Strong>Full Name</Strong></label>
                                <input type="text" name="fullname" class="form-control" id="fullname"
                                    placeholder="Enter Your Full Name" required>
                            </div>

                            <div class="form-group">
                                <label for="username"><Strong>Username</Strong></label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Enter Your Username" required>
                            </div>

                            <div class="form-group">
                                <label for="email_address"><Strong>Email</Strong></label>
                                <input type="email" id="email_address" name="email" class="form-control"
                                    placeholder="E-mail" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_number"><Strong>Phone Number</Strong></label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control"
                                    placeholder="Enter Phone Number" required>
                            </div>

                            <div class="form-group">
                                <label for="country"><strong>Country:</strong></label>
                                <div class="input-container">
                                    <select id="country" name="country" required
                                        style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                                        <option value="" selected disabled>Select your Country</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="United States">United States (USA)</option>
                                        <option value="India">India</option>
                                        <option value="United Kingdom">United Kingdom (UK)</option>
                                        <option value="China">China</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">newzealand</option>
                                        <option value="Vietnam">Netherland</option>
                                        <option value="Indonesia">Indonesia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sports"><strong>Sports</strong></label>
                                <div class="input-container">
                                    <select id="sports" name="sports" required
                                        style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                                        <option value="" selected disabled>Select your Favorate Sports</option>
                                        <option value="football">Football</option>
                                        <option value="volleyball">Volleyball</option>
                                        <option value="basketball">Basketball</option>
                                        <option value="swimming">swimming</option>
                                        <option value="hockey">Hockey</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <label for="password"><Strong>Password</Strong></label>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Enter Password" required onkeyup="validatePassword()"
                                    oninput="checkpasswordmatch()">
                                    <span class="toggle-password" onclick="togglePassword('password')">&#x1F441;</span>


                            </div>

                            <div class="form-group">
                                <label for="password"><Strong>Confirm Password</Strong></label>
                                <input type="password" id="confirm_password" name="confirm_password"
                                    class="form-control" placeholder="Confirm  Password" required
                                    onkeyup="validatePassword(); checkpasswordmatch()" oninput="checkpasswordmatch()">
                                    <span class="toggle-password" onclick="togglePassword('password')">&#x1F441;</span>


                            </div>

                            <div id="error-message" style="margin-top:5px;"></div>
                            <div class="password-match" id="password-match"></div>

                            

                            <div class="form-group" style="margin-top:10px">
                                <button type="submit" 
                                id="signupBtn"
                            class="btn btn-primary btn-lg" value="SignUp"
                                    name="register">Signup</button>
                                <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
                            </div>

                            <div class="already-have-account"
                                style=" font-size:15px;margin-top:20px; margin-left: 10px; ">
                                <p>Already have an account? <a href="login.php" style="color:red">Login</a></p>
                            </div>



                        </form>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Signup panel end -->

    <script>
    
    function checkpasswordmatch() {
        var passwordInput = document.getElementById("password");
        var confirmPasswordInput = document.getElementById("confirm_password");
        var passwordMatchMessage = document.getElementById("password-match");
        var signupBtn = document.getElementById("signupBtn");

        // Get the entered passwords
        var password = passwordInput.value;
        var confirmPassword = confirmPasswordInput.value;

        // Check if the passwords match
        if (password === confirmPassword) {
            passwordMatchMessage.textContent = "Passwords match!";
            passwordMatchMessage.style.color = "green";
            signupBtn.disabled = false; // Enable signup button
        } else {
            passwordMatchMessage.textContent = "Passwords do not match!";
            passwordMatchMessage.style.color = "red";
            signupBtn.disabled = true; // Disable signup button
        }
    }
</script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>