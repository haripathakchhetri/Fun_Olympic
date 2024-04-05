<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Olympic Website</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    


</head>

<body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1300,
        }
        ); 
    </script>

    <style>
        .checked {
            color: orange;
        }

        body {
            background-color: #DCDCDC;
            font-family: 'Open Sans', sans-serif;
        }


        #contact {
            padding: 60px 0;
        }

        #contact h2 {
            color: paleturquoise;
            color: #be6231;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
        }




        .container form textarea {
            width: 60%;
        }


        .footer {
            background-color: #212529;
            color: #fff;
            padding: 60px 0;
        }

        .footer a {
            color: #fff;
        }

        .footer a:hover {
            color: #005c5c;
        }
    </style>

    


    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2><strong>BROADCAST LIVE VIDEOS</strong></h2>
            </div>
        </div>
    </section>


    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-md-14" style="margin-left: 100px; margin-top: -150px;">
                <?php
                $dir = glob('images/video/1/{*.mp4}', GLOB_BRACE);
                foreach ($dir as $value) {
                    ?>
                    <h3
                        style="color: black; font-size: 22px; margin-right: 50px; margin-top: 100px; margin-bottom: 15px; font-family: Arial, sans-serif;">
                        Michael Phelps Olympic Race - Swimming Men's 4x100m Medley Relay Final</h3>
                    <h3 style="font-size: 15px; font-family: Arial, sans-serif;">Live Now 🔴</h3>
                    <div class="livebox">
                        <a href="<?php echo $value; ?>">
                            <video src="<?php echo $value; ?>" alt="HNP" width="70%" ; controls>
                                <source src="<?php echo $value; ?>" type="video/mp4">
                                <source src="<?php echo $value; ?>" type="video/ogg">
                            </video>

                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-9">
                <?php
                ?>
            </div>
        </div>
    </div>
    <!-- content end -->


    <br><br><br><br>

    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-md-14" style="margin-left: 100px; margin-top: -150px;">
                <?php
                $dir = glob('images/video/2/{*.mp4}', GLOB_BRACE);
                foreach ($dir as $value) {
                    ?>
                    <h3
                        style="color: black; font-size: 22px; margin-right: 50px; margin-top: 100px; margin-bottom: 15px; font-family: Arial, sans-serif;">
                        Mary Kom's Journey to Boxing Bronge at London 2012</h3>
                    <h3 style="font-size: 15px; font-family: Arial, sans-serif;">Live Now 🔴</h3>
                    <div class="livebox">
                        <a href="<?php echo $value; ?>">
                            <video src="<?php echo $value; ?>" alt="HNP" width="70%" ; controls>
                                <source src="<?php echo $value; ?>" type="video/mp4">
                                <source src="<?php echo $value; ?>" type="video/ogg">
                            </video>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-9">
                <?php
                ?>
            </div>
        </div>
    </div>
    <!-- content end -->

    <br><br><br><br>




    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-md-14" style="margin-left: 100px; margin-top: -150px;">
                <?php
                include 'config/connection.php';
                $dir = glob('images/video/{*.mp4}', GLOB_BRACE);
                foreach ($dir as $value) {
                    $video_name = basename($value);
                    $title = isset($_SESSION['uploaded_videos'][$video_name]) ? $_SESSION['uploaded_videos'][$video_name] : 'Untitled';

                    ?>
                    <h3
                        style="color: black; font-size: 22px; margin-right: 50px; margin-top: 100px; margin-bottom: 15px; font-family: Arial, sans-serif;">
                        <?php echo $title; ?>
                    </h3>
                    <h3 style="font-size: 15px; font-family: Arial, sans-serif;">Live Now 🔴</h3>
                    <div class="livebox">
                        <a href="<?php echo $value; ?>">
                            <video src="<?php echo $value; ?>" alt="HNP" width="70%" ; controls>
                                <source src="<?php echo $value; ?>" type="video/mp4">
                                <source src="<?php echo $value; ?>" type="video/ogg">
                            </video>
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-9">
                <?php
                ?>
            </div>
        </div>
    </div>
    <!-- content end -->

    <!-- comment start  -->
    <div class="container" style="margin: 30px 0px; margin-left: 250px;">
        <h2 class="display-6">Comments</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="content"></label>
                <textarea class="form-control" name="comment" id="content" rows="5" placeholder="Provide some comments"
                    style="width: 60%;" required></textarea>
            </div>
            <div class="form-group" style="margin: 30px 0px;">
                <label for="Rating">Rating:</label>
                <input type="text" class="form-control" name="rate" id="" aria-describedby="helpId" placeholder="1 to 5"
                    style="width: 60%;">
            </div>
            <button type="submit" name="submit"
                style="border-radius: 5px; padding: 7px; color: #fff; background-color: #008374">Submit</button>
            <button type="reset"
                style="border-radius: 5px; padding: 7px; color: #fff; background-color: gray;">Cancel</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            include 'config/connection.php';
            $user = $_SESSION['username'];
            $date = date('Y/m/d');
            $com = $_POST['comment'];
            $rate = $_POST['rate'];
            $query = "INSERT INTO comment(user, date, comment, rate) VALUES ('$user', '$date', '$com', '$rate')";
            $run = mysqli_query($conn, $query);

            if ($run) {
                echo "<script>
    window.onload = function() {
        setTimeout(function() {
            alert('Comment added successfully');
        }, 1000);
    }
</script>";


            } else {
                echo "<script>window.alert('Error Found!')</script>";
            }
        }
        ?>

        <div class="container" style="margin: 30px 0px;">
            <h2 class="display-6">Comments:</h2>
        </div>

        <!-- comment to start display -->
        <?php
        include 'config/connection.php';
        $query = "SELECT * FROM comment ORDER BY rand() LIMIT 5";
        $run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($run)) {
            $comment_id = $row['id'];
            $username = $row['user'];
            $date = $row['date'];
            $comment = $row['comment'];
            $rate = $row['rate'];
            ?>

            <div class="container">
                <div class="row" style="margin: 40px 0px; margin-top: -20px;">
                    <div class="col-sm-8">
                        <div class="username"
                            style="text-transform:uppercase; font-size: 16px; font-weight: bold; color: #740083;">
                            <?php echo $username; ?>

                            <?php
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $rate) {
                                    echo '<span class="fa fa-star checked"></span>';
                                } else {
                                    echo '<span class="fa fa-star"></span>';
                                }
                            }
                            ?>
                        </div>
                        <div class="date" style="font-size: 12px; color: #808080;">
                            <?php echo $date; ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="comment" style="font-size: 15px;">
                            <?php echo $comment; ?>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="actions">
                            <a href="editcomment.php?id=<?php echo $comment_id; ?>" class="edit">Edit</a>
                            <a href="deletecomment.php?id=<?php echo $comment_id; ?>" class="delete">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="home.php" class="logo d-flex align-items-center">
                        <span>Fun Olympics 2024</span>
                    </a>
                    <p>Stay connected with us for the latest updates and news about the olympics games.
                        Join the
                        conversation using Fun Olympics 2024 Website.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter" style="margin-right: 4px;"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook" style="margin-right: 4px;"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram" style="margin-right: 6px;"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="broadcast.php">Broadcast</a></li>

                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>



                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start" style="margin-left: 180px;">
                    <h4>Contact Us</h4>
                    <p>
                        Stade de France <br> City of paris,<br> payris <br><br>
                        <strong>Phone:</strong> +1-123-456-7899<br>
                        <strong>Email:</strong> info@funolympic2024.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4 text-center">
            <div class="copyright">
                &copy; 2024 Copyright <strong><span>FunOlympic </span></strong>. All Rights Reserved
            </div>

            <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

        </div>
        
     