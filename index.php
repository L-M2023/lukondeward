<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Fix MyStreet</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

 
    <link href="assets/css/style.css" rel="stylesheet" />

    
</head>

<body>
    <?php
    include('header.php')
    ?>


   
      <br>
    <section id="hero" class="d-flex align-items-center"  
    style="background-image: url('assets/img/88.jpg'); background-size: cover; background-position: center;  margin-top: 30px;
       height: 80%;
       width: 99%;
       border-radius: 120px ;
       margin-top: 82px;">
        <div class="container">
            
            
                <div class="row">
                    <div style="background-color: #802f3b;  height: 62%; width: 70%; border-radius: 80px ; margin-top: 82px; " class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center  "><br>
                        <h1 style=" border-radius: 80px ; text-align: center; background-color: #802f3b; color: white;" >Be a part of shaping the future of our community. Your voice matters!</h1>
                        <h2 style="   border-radius: 80px ; background-color: #802f3b; color: white;"> Report & engage in discussions on local issues directly 
                            impacting our neighborhood. Together, let's transform our community.
                        </h2>
                        <div>
                            <a href="login.php" class="btn-get-started scrollto">Get Started</a>
                        </div>
                    </div>
                </div>
            
        </div>
    </section><br><br>



    <style>
        /* Animated background */
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: linear-gradient(45deg, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1);
            background-size: 400% 400%;
            animation: gradientAnimation 8s ease infinite;
            z-index: -1;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Gallery container */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 40px;
            padding: 50px;
            animation: fadeIn 1.5s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Individual item container */
        .gallery-item {
            position: relative;
            width: 300px;
            height: 300px;
            overflow: hidden;
        }

        /* Image styling */
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        /* Hover effects */
        .gallery-item img:hover {
            transform: scale(1.2) rotate(2deg);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
        }

        /* Text overlay */
        .gallery-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            font-size: 1rem;
            border-radius: 20px;
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
            transform: scale(1);
        }

        /* Call-to-action button */
        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-get-started {
            background-color: #007bff;
            color: white;
            padding: 15px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 1.2rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-get-started:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }
    </style>

    <div class="background"></div>

    <div class="gallery">
        <div class="gallery-item">
            <img src="pro images/images (6).jpg" alt="Image 1">
            <div class="overlay">
                Our Community nights are nothing short of magical, offering a blend of natural beauty, cultural richness, and shared moments that create lasting memories.
            </div>
        </div>
        <div class="gallery-item">
            <img src="pro images/download (1).jpg" alt="Image 2">
            <div class="overlay">
                Zambia, a land of vibrant culture and diverse communities, embodies a collective spirit deeply rooted in its traditions and values. Here are some cool aspects of Zambia’s community life that showcase its unity, resilience, and cultural richness:
            </div>
        </div>
        <div class="gallery-item">
            <img src="pro images/cil.jpg" alt="Image 3">
            <div class="overlay">
                Children in our communities are truly a source of joy and wonder, embodying resilience, creativity, and a spirit of togetherness that reflects the collective values of their upbringing.
            </div>
        </div>
    </div>

    <div class="btn-container">
        <a href="community.php" class="btn-get-started">Learn More</a>
    </div>







   
    <main id="main">     
        <section  id="services" class="services section-bg">
            <div style=" color: white; background-color: black; box-shadow: 0 20px 30px rgb(5, 7, 6);" class="container">
                <div class="section-title">
                    <h2 style=" border-radius: 20px; color: white; background-color: black; ">Services</h2>
                    <p>Explore the features and services offered by our platform to empower citizens and improve communities:</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div style=" color: white; background-color: black;  box-shadow: 0 20px 30px white;" class="icon-box">

                            <h4 class="title"><a href="register.php">Report Problems</a></h4>
                            <p class="description">Easily report local issues such as potholes, broken streetlights, and litter to authorities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style=" color: white; background-color: black; box-shadow: 0 20px 30px white;" class="icon-box">

                            <h4 class="title"><a href="#">Discuss Solutions</a></h4>
                            <p class="description">Engage in discussions with other citizens and policymakers to find solutions to community problems.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div style=" color: white; background-color: black;  box-shadow: 0 20px 30px white;" class="icon-box">

                            <h4 class="title"><a href="#">Track Progress</a></h4>
                            <p class="description">Stay updated on the progress of reported issues and see them resolved in your community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        
      <br>
     <br>
   
        <section id="about" class="about">
            <div style=" color: white; background-color: #802f3b; box-shadow: 0 20px 30px white;  border-radius: 20px;"  class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3 style="text-align: center; border-radius: 20px; font-size: 40px; background-color: black;  box-shadow: 0 20px 30px white;">Empowering Citizens to Improve Their Communities</h3><br><br>
                        <p>
                            Our platform provides a space for citizens to report, view, and discuss local problems within their constituency. Here's how we make a difference:
                        </p>

                        <div class="icon-box">

                            <h4 class="title">Report Problems</h4>
                             <p class="description">
                                Easily report issues such as potholes, broken streetlights, and litter to your local government authorities.
                              </p>
                               </div>

                                 <div class="icon-box">

                               <h4 class="title">Discuss Solutions</h4>
                             <p class="description">
                                Engage in discussions with other citizens and policymakers to find solutions to community problems.
                            </p>
                        </div>

                       
                    </div>

                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
                       
                    </div>
                </div>
            </div>
        </section>

       

    
        
        
        <section id="faq" class="faq">
            <div class="container">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Here are some common questions about our platform:</p>
                </div>

                <div class="row faq-item">
                    <div class="col-lg-6">
                        <i class="bx bx-help-circle icon-help"></i>
                        <h4>How do I report a problem?</h4>
                        <p>
                            To report a problem, simply navigate to the "Report" section of our platform and fill out the form with the necessary details about the issue you encountered.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <i class="bx bx-help-circle icon-help"></i>
                        <h4>Can I edit my submitted report?</h4>
                        <p>
                            Yes, you can edit your submitted report by logging into your account and selecting the report you wish to edit. From there, you can make the necessary changes.
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>


        </section>


    </main>

  
    </main>
   

    <?php
    include('footer.php')
    ?>

    

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    
    <script src="assets/js/main.js"></script>
</body>

</html>





