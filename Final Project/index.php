<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Holt Skinner </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">


    <!-- ========================================
                Stylesheets
        ==========================================-->

    <!-- MATERIALIZE CORE CSS -->
    <link href="assets/css/materialize.min.css" rel="stylesheet">

    <!-- ADDITIONAL CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- FONTS -->
    <link href="assets/icons/googlefonts.css" rel='stylesheet' type='text/css'>

    <!--FONTAWESOME CSS-->
    <link href="font-awesome-4.6.1/font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- CUSTOM STYLE -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- RESPONSIVE CSS-->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <!--=====================JavaScript===================== -->
    <!-- Jquery core js-->
    <script src="assets/js/jquery.min.js"></script>

    <!-- materialize js-->
    <script src="assets/js/materialize.min.js"></script>

    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>

    <!-- Masonry js -->
    <script src="assets/js/masonry.pkgd.js"></script>

    <script src="assets/js/validator.min.js"></script>

    <!-- Customized js -->
    <script src="assets/js/init.js"></script>

</head>


<body>
    <!-- Start Container-->
    <div class="container">
        <?php
    session_start();
    if(isset($_SESSION['username']))//Check if logged in
    {
        $username = $_SESSION['username'];
        echo "<h2>Welcome, $username </h2>";
    }
?>
            <!-- row -->
            <div class="row">
                <?php
                include("template.php");
                ?>


                    <!-- ========================================
                         Education 
                        ==========================================-->
                    <div id="content">
                        <section class="col s12 m12 l8 section ">
                            <div class="row"></div>
                            <div class="section-wrapper z-depth-1 ">
                                <div class="section-icon col s12 m12 l2 ">
                                    <i class="fa fa-graduation-cap "></i>
                                </div>
                                <div class="custom-content col s12 m12 l10 wow fadeIn a1 " data-wow-delay="0.1s ">
                                    <h2>Education </h2>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.2s ">
                                        <h3>Computer Science, Bachelor of Science
                                <br>
                            <span>Minors: Math & Information Technology</span>
                                <br>
                            <span href="http://engineering.missouri.edu/cs/ ">University of Missouri - Columbia</span></h3>
                                        <span>August 2014 - May 2018</span>
                                        <br>
                                        <span>GPA: 3.979</span>
                                    </div>
                                </div>
                            </div>

                            <!-- =========================================
                   Work experiences
                ==========================================-->

                            <div class="section-wrapper z-depth-1 ">
                                <div class="section-icon col s12 m12 l2 ">
                                    <i class="fa fa-suitcase "></i>
                                </div>
                                <div class="custom-content col s12 m12 l10 wow fadeIn a1 " data-wow-delay="0.1s ">
                                    <h2>Work Experience</h2>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.2s ">
                                        <h3>Peer Advisor<br>
                                <span href="https://reslife.missouri.edu/ ">Residential Life, University of Missouri</span></h3>
                                        <span>August 2015 - Present </span>
                                        <p>Taught a one credit hour freshman seminar class focused on computer science and leadership. Closely supervised and mentored 17 freshman engineering students. Worked to create a cohesive, academically-focused community in the residence hall.</p>
                                    </div>
                                    <div class="custom-content-wrapper wow fadeIn a3 " data-wow-delay="0.3s ">
                                        <h3>Lab Technician <br>
                                <span>Academic Support Center, University of Missouri</span></h3>
                                        <span>August 2014 - Present </span>
                                        <p>Provided technological support for lab computers and computer software. Supervised lab during evening hours. </p>
                                    </div>
                                    <div class="custom-content-wrapper wow fadeIn a4 " data-wow-delay="0.4s ">
                                        <h3>Freelance Computer Technician <br>
                                <span>Self-Employed</span></h3>
                                        <span>August 2011 - Present </span>
                                        <p>Provided technological support for various types of software and hardware. Performed virus removals and general performance optimizations.</p>
                                    </div>
                                    <div class="custom-content-wrapper wow fadeIn a5 " data-wow-delay="0.5s ">
                                        <h3>IT Intern<br>
                                <span>Quality Computers, Inc.</span></h3>
                                        <span>August 2011 - Present </span>
                                        <p>Built custom computers for sale. Performed computer repairs for customers and businesses. Provided IT services in the form of consultations and service calls.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- ========================================
                         Projects & Extra Curriculars
                        ==========================================-->
                            <div class="section-wrapper z-depth-1 ">
                                <div class="section-icon col s12 m12 l2 ">
                                    <i class="fa fa-coffee "></i>
                                </div>
                                <div class="custom-content col s12 m12 l10 wow fadeIn a1 " data-wow-delay="0.1s ">
                                    <h2>Projects, Extra Curriculars and Honors</h2>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.2s ">
                                        <h3>Engineering Grand Challenge
                                <br>
                                <span>Engineering Dean's Scholars</span></h3>
                                        <span>Fall 2014</span>
                                        <p>Created a theoretical solution to the Engineering Grand Challenge "Prevent Nuclear Terrorism " in a team of 6. Presented results to the Department Chairs and the Dean of the College of Engineering.</p>
                                    </div>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.3s ">
                                        <h3>Dean’s High Honor Roll</h3>
                                        <span>Fall 2014 - Fall 2015</span>
                                        <p>Achieved a 3.5-4.0 GPA for the semester.</p>
                                    </div>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.4s ">
                                        <h3>Mizzou Computing Association</h3>
                                        <span>Fall 2014 - Present</span>
                                        <p>Head of Logistics: Hack Mizzou</p>
                                    </div>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.5s ">
                                        <h3>University Singers</h3>
                                        <span>Fall 2014 - Present</span>
                                        <p>Tuning Voice</p>
                                    </div>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.5s ">
                                        <h3>Mizzou Idol
                                <br>
                                <span>Fan Favorite Contestant</span></h3>
                                        <span>February 2016</span>
                                    </div>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.5s ">
                                        <h3>Engineering Dean's Scholars</h3>
                                        <span>Fall 2014 - Present</span>
                                    </div>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.5s ">
                                        <h3>Mizzou Scholars 100</h3>
                                        <span>May 2014</span>
                                    </div>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.5s ">
                                        <h3>Mizzou Scholars Academy</h3>
                                        <span>June 2012</span>
                                    </div>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.5s ">
                                        <h3>West Plains High School Concert Choir
                                <br>
                                <span>Concert Master</span></h3>
                                        <span>August 2010 - May 2014</span>
                                    </div>

                                    <div class="custom-content-wrapper wow fadeIn a2 " data-wow-delay="0.5s ">
                                        <h3>West Plains High School Varsity Band
                                <br>
                                <span>Section Leader</span></h3>
                                        <span>August 2010 - May 2014</span>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                            <div class="section-wrapper z-depth-1 wow fadeIn " data-wow-delay="0.1s ">
                                <div class="col s12 m12 l10 website right ">
                                    <div class="row">
                                        <span><a href="http://themeforest.net/item/material-cvresume/12374628" target="_blank">Theme courtesy of Themeforest</a></span>
                                    </div>
                                </div>
                            </div>

                            <!-- end row -->
                        </section>
                        <!-- end section -->
                    </div>
                    <!-- end row -->
            </div>
            <!-- end container -->
    </div>
</body>

</html>