<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    header("location: login.php"); 
    exit;
}

if (isset($_GET['id'])) {
    include 'config/connection.php'; 

    $comment_id = mysqli_real_escape_string($conn, $_GET['id']);

   
    $query = "DELETE FROM comment WHERE id = '$comment_id'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
      
        header("Location: broadcast.php"); 
        exit;
    } else {
        
        echo "Error deleting comment.";
    }
} else {
    header("Location: broadcast.php");
    exit;
}
?>;