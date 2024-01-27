<header class="header">

    <div class="flex">

        <a href="home.php" class="logo">Home<span>Panel</span></a>

        <nav class="navbar">
            <a href="policy.php">Policies</a>
            <a href="">Services</a>
            <a href="">Feedbacks</a>
            <a href="">Contact Us</a>
            <a href="application.php">Application Form</a>
        </nav>
       
        <div class="icons">
            <div id="user-btn" class = "fas fa-user-circle fa-lg">
                <div class="account-box">
                    <p> Username: <span><?php echo $_SESSION['user_name']; ?></span></p>
                    <p> Useremail: <span><?php echo $_SESSION['user_email']; ?></span></p>
                    <a href="login.php" class="delete-btn">logout</a>
                </div>
            </div>
        </div>
        

    </div>

</header>