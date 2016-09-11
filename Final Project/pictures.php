<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Cat Pictures </title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- materialize js -->
    <script src="assets/js/materialize.min.js"></script>
    <!-- Customized js -->
    <script src="assets/js/init.js"></script>
    <!-- JQuery UI-->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>

    <style>
        .grid img {
            width: 600px;
            align-content: center;
        }
        
        .row {
            align-content: center;
        }
        
        #morecats {
            margin: 10px;
        }
    </style>

    <script>
        function cats() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    document.getElementById("catquote").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", "http://macchiato.centralus.cloudapp.azure.com/resume/cat.txt", true);
            xhttp.send();
        }

        $(document).click(function () {
            $(".puffable").toggle("puff"); //Causes "puff effect when the page is clicked. I had issues selecting individual pictures. Was lagging on slower computers.
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php

    session_start();
    if(!isset($_SESSION['username']))//Check if logged in
    {
        echo "<h1>You must be logged in to view this page!!!</h1>";

        echo '<a class=" btn btn-info" href="login.php">Go to Login</a>';
        exit;
    }

    include("template.php");//Sidebar data

 ?>

                <section class="col s12 m12 l8 section">
                    <div class="row">
                        <div>
                            <i class="fa fa-hand-o-down"></i>
                        </div>
                        <div class="full-portfolio z-depth-1">
                            <ul class="grid">
                                <li><img class="puffable" src="https://i.ytimg.com/vi/tntOCGkgt98/maxresdefault.jpg" alt="Cat1"></li>
                                <li><img src="http://newbabywallpapers.com/download/pictures-of-baby-tigers-and-wallpaper/pictures-of-baby-tigers-and-wallpaper-8.jpg" alt="Cat2"></li>
                                <li><img src="http://i2.cdn.turner.com/cnnnext/dam/assets/150324154025-14-internet-cats-restricted-super-169.jpeg" alt="Cat3"></li>
                                <li><img src="https://www.petfinder.com/wp-content/uploads/2012/11/99233806-bringing-home-new-cat-632x475.jpg" alt="Cat4"></li>
                                <li><img src="https://www.petfinder.com/wp-content/uploads/2012/11/101438745-cat-conjunctivitis-causes.jpg" alt="Cat5"></li>

                            </ul>
                        </div>
                    </div>

                    <div class="clear"></div>
                    <div class="section-wrapper z-depth-1" data-wow-delay="0.1s ">
                        <div class=" col s12 m12 l10 website right">
                            <div id="catquote">
                                <h3>"Time spent with cats is never wasted."</h3>
                            </div>
                            <button id="morecats" class="btn btn-info" onclick="cats()">Get a Cat Quote!</button>
                        </div>
                    </div>
                </section>
        </div>
    </div>
</body>

</html>