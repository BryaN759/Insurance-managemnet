<header class="header">

    <div class="flex">

        <a href="adminpage.php" class="logo">Admin<span>Panel</span></a>

        <nav class="navbar">
            <a href="">Policies</a>
            <a href="">Claims</a>
            <a href="">Queries</a>
            <a href="">Feedbacks</a>
            
        </nav>
       
        <div class="icons">
            <div id="user-btn" class = "fas fa-user-circle">
                <div class="account-box">
                    <p> Username: <span><?php echo $_SESSION['admin_name']; ?></span></p>
                    <p> Useremail: <span><?php echo $_SESSION['admin_email']; ?></span></p>
                    <a href="login.php" class="delete-btn">logout</a>
                </div>
            </div>
        </div>
        

    </div>

</header>