
<header style="background-color: #802f3b; border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;" id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
     
    
    <a href="ADmin/index.php" class="logo text-uppercase text-white" style="font-weight: bold; font-size: 1.2rem; text-decoration: none; color: black;">
           ADMINISTRATOR
        </a>

        <nav id="navbar" class="navbar">
            <ul>
            

                <li><a class="nav-link scrollto" href="index.php">Home</a></li>          
                <li><a class="nav-link scrollto" href="register.php">User//Registration</a></li>
                <li><a class="nav-link scrollto" href="index.php#about">About us</a></li>
                <li><a class="nav-link scrollto" href="community.php">Community</a></li>
                <li><a class="nav-link scrollto" href="map.php">map</a></li>
              
                
                <?php
                // Start the session
                session_start();

                
                if (isset($_SESSION['username'])) {
                    // If logged in, show logout link
                    echo '<li><a class="nav-link" href="dashboard.php">dashboard</a></li>';
                    echo '<li><a class="nav-link" href="logout.php">Logout</a></li>';
                }
                ?>
            </ul>
            <i  style="color: white;" class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
