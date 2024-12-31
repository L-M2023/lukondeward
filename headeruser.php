
<header style="background-color:  #802f3b; border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;" id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

       
        <h1 style=" color: white; width: 30%;" class="logo"><a href="index.html">lukonde Ward</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
           
         
                 <?php
                // Start the session
                session_start();

                
                if (isset($_SESSION['username'])) {
                    // If logged in, show logout link
                    echo '<li><a class="nav-link" href="dashboard.php">dashboard</a></li>';
                    echo '<li><a class="nav-link" href="home.php">meetings</a></li>';
                    echo '<li><a class="nav-link" href="suggestion.php">suggestion//box</a></li>';
                    echo '<li><a class="nav-link" href="testing12.php"> <span class="bell-icon">🔔</span></a></li>';
                    echo '<li><a class="nav-link" href="logout.php">Logout</a></li>';
                }
                ?>
            </ul>
            <i  style="color: white;" class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
