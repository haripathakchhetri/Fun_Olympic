<!-- header section starts -->
<header class="header">
    <section class="flex">
        <img src="../images/dashboard/logowithnobg.png" style="height: 60px; width: 80px;" alt="">
    <h1>Payris Olympics 2024</h1>
        <div class="icons">
            <div id="user-btn" onclick="toggleTheme()" class="bi bi-brightness-high"></div>
        </div>
    </section>
</header>

<script>
  function toggleTheme() {
    var body = document.getElementsByTagName('body')[0];
    body.classList.toggle('dark-theme');
  }
</script>
<!-- header section ends -->

<!-- side bar section starts  -->
<div class="side-bar bg-info">

    <div class="close-side-bar">
        <i class="fas fa-times"></i>
    </div>

    <div class="profile">
    <img src="../images/dashboard/admin.jpg">
        <a href="main.php" class="btn bg-primary"><?php echo $_SESSION['username']; ?></a>
    </div>

    <nav class="navbar">
        <a href="main.php" class="nav-link"><i class="fas fa-home" style="color: white;"></i><span class="text-white">Dashboard</span></a>
        <a href="view-users.php" class="nav-link"><i class="fas fa-user" style="color: white;"></i><span class="text-white">Users</span></a>
        <a href="upload-video.php" class="nav-link"><i class="fas fa-graduation-cap" style="color: white;"></i><span class="text-white">Upload Videos</span></a>
        <a href="view-comment.php" class="nav-link"><i class="fas fa-comment" style="color: white;"></i><span class="text-white">Comments</span></a>
        <a href="../index.php"  onclick="return confirm('Are You sure want to Logout??');"style="text-decoration: none;"><i
                class="fas fa-right-from-bracket" style="color:white"></i><span class="text-white">Logout</span></a>
    </nav>

</div>

<!-- side bar section ends -->


<style>
    .side-bar {
        display: flex;
        flex-direction: column;
    }

    .nav-link {
        display: block;
        width: 100%;
        align-items: center;
        
        
    }

    .dark-theme{
        background-color: grey;
        color: darkred;
    }
</style>