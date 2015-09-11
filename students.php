<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean - One Page Personal Portfolio</title>

    <!-- CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- Custom styles CSS -->
    <link href="assets/css/style.css" rel="stylesheet" media="screen">

    <script src="assets/js/modernizr.custom.js"></script>

</head>
<body>

<!-- Preloader -->

<div id="preloader">
    <div id="status"></div>
</div>

<!-- Navigation start -->

<header class="header">

    <nav class="navbar navbar-custom" role="navigation">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">John Doe</a>
            </div>

            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li class="active"><a href="students.html">Students</a></li>
                    <li><a href="recruiters.html">Recruiters</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

        </div><!-- .container -->

    </nav>

</header>

<!-- Navigation end -->



<!-- Skills start -->

<section class="pfblock pfblock-gray" id="skills">

    <div class="container">

        <div class="row skills">

            <div class="row">

                <div class="col-sm-8 col-sm-offset-2">

                    <div class="pfblock-header wow fadeInUp">
                        <h2 class="pfblock-title">Students</h2>
                        <div class="pfblock-subtitle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at
                            dictum turpis. Maecenas posuere, nisl a auctor maximus, turpis diam lobortis
                            purus, et consequat sapien dolor at lacus. Nulla cursus a lorem ac sodales. Suspendisse
                            rutrum, tellus non tempus pretium, est ligula dictum erat, in congue turpis dolor ut erat.
                            Nulla at risus tempor, interdum elit nec, luctus ipsum. In pharetra, tellus et tristique
                            vestibulum, arcu dolor iaculis erat, nec pretium ex neque sit amet augue. Donec posuere
                            elit a enim ornare, nec dictum nisl mattis. Pellentesque dignissim purus vitae odio
                            pellentesque, sed convallis libero efficitur.
                        </div>
                    </div>

                </div>

            </div><!-- .row -->


        </div><!--End row -->

    </div>

</section>

<!-- Skills end -->

<!-- CallToAction start -->

<section class="pfblock calltoaction">
    <div class="container">

        <div class="row text-center">
            <h2 style="padding-bottom: 10px;">Send In Your Info</h2>
        </div>
        <div class="row" style="padding-bottom: 10px;">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 pfblock-subtitle" style="color: white;">
                Rohan Kapoor, Rak Garg, and trusted recruiters are the only ones who will be granted access.
                <div class="pfblock-subtitle">
                    <div class="calltoaction-btn">
                        <form action="students.php" method="post" enctype="multipart/form-data">
                        
                        <input type="file" name="resume">
                        <input type="submit" name="upload" value="Send Resume">

                    </form>

                    <?php 
                    if (isset($_POST['upload'])) {
                         $file_name = $_FILES['resume']['name'];
                         $file_type = $_FILES['resume']['type'];
                         $file_size = $_FILES['resume']['size'];
                         $file_tmp_name = $_FILES['resume']['tmp_name'];
                                        
                        $ext = substr($file_name, strrpos($file_name, '.') + 1);
                        //make sure we got a valid file
                        if ($file_name=='') {
                            echo "<script>alert('Please select a file.')</script>";
                        }
                        elseif ($file_size > 2000000) {
                                echo "<script>alert('Sorry! We only accept files less than 2MB in size.')</script>";
                        }
                        elseif($ext != "pdf" or $ext != "txt" or $ext != "docx" or $ext != "doc" or $ext != "pages" ) {
                                echo "<script>alert('We only accept resumes in PDF, DOCX, DOC, TXT, or PAGES formats')</script>";
                        }
                        else {
                            move_uploaded_file($file_tmp_name, "resumes/$file_name");
                            echo "Resume Uploaded.";
                        }

                    }

                    //check to make sure filename is valid 

                    ?> 
                    <!--  <a href="" class="btn btn-lg">Send Resume</a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pfblock-subtitle" style="color:white;">
                Join our mailing list to recieve updates on our activity and the latest recruitment opportunities.
                <div class="pfblock-subtitle" style="color:#111; font-weight: 100; margin-top: 5px; margin-bottom: 5px;">
                    <input placeholder="UCLA emails only" style="width: 250px; line-height: 40px; border: 1px solid #111; background: rgba(255, 255, 255, .8); border-radius:2px;">
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div><!-- .container -->
</section>

<!-- CallToAction end -->

<section class="pfblock pfblock-gray">
    <div class="container"></div>
</section>


<!-- Footer start -->

<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">

                <ul class="social-links">
                    <li><a href="index.html#" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-envelope"></i></a></li>
                </ul>

                <p class="heart">
                    Made with <span class="fa fa-heart fa-2x animated pulse"></span> in Nottingham
                </p>
                <p class="copyright">
                    © 2015 John Doe | Images: <a href="https://unsplash.com/">Unsplash</a> & <a href="http://zoomwalls.com/">Zoomwalls</a>
                </p>

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</footer>

<!-- Footer end -->

<!-- Scroll to top -->



<!-- Scroll to top end-->

<!-- Javascript files -->

<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.parallax-1.1.3.js"></script>
<script src="assets/js/imagesloaded.pkgd.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.easypiechart.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.cbpQTRotator.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>