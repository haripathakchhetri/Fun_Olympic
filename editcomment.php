<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Comment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <!-- comment start  -->
    <div class="container" style="margin: 30px 0px; margin-left: 300px;">
        <h2 class= "display-6">Edit comment:</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="content"></label>
                <textarea class="form-control" name="comment" id="content" rows="5" placeholder="Comment"  style="width: 60%;"
                    required></textarea>
            </div>
            <div class="form-group" style="margin: 30px 0px;">
                <label for="Rating">Rating:</label>
                <input type="text" class="form-control" name="rate" id="" aria-describedby="helpId"
                    placeholder="1 to 5" style="width: 60%;">
            </div>
            <button type="submit" name="submit" style= "border-radius: 5px; padding: 7px; color: #fff; background-color: #008374;">Edit Comment</button>
            <button type="reset" style= "border-radius: 5px; padding: 7px; color: #fff; background-color: red;">Cancel</button>
        </form>
        <?php
  if(isset($_POST['submit']))
  {
    include 'config/connection.php';
    $user = $_SESSION['username'];
    $date = date('Y/m/d');
    $com = $_POST['comment'];
    $rate = $_POST['rate'];
    $query = "INSERT INTO comment(user, date, comment, rate) VALUES ('$user', '$date', '$com', '$rate')";
    $run = mysqli_query($conn, $query);
    
    if($run) {
        echo'<script>alert ("Commment Edited Succesfully;")
        window.location.href = "broadcast.php";
                        </script>';
                        exit();
    } else {
        echo "<script>window.alert('Error Found!')</script>";
    }
  }
?>

</body>
</html>