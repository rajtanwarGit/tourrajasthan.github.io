<?php

// DB Connection
require_once 'db/config.php';
require_once 'db/insert_modal.php';
require_once 'db/fetch_city.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Rajasthan</title>
    <!-- add icon link -->
    <link rel="icon" href="icon/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/mobile.css">



    <!-- Material Design Bootstrap -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>

<body>


    <!-- NavBar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="#">
                <img src="/icon/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo" style="filter: brightness(-100%);">
                Tour Rajasthan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse navItems" id="navbarSupportedContent">
                <ul class="navbar-nav mx-3">
                    <li class="nav-item mx-2">
                        <a class="nav-link activeLink" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#gallery">Places</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Things To Do in Rajasthan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="blog/blogs.php">Blogs</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-3">
                        <button type="button" class="btn peach-gradient rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry Form <i class="fab fa-wpforms"></i></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Carousel -->
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
            <li data-target="#carousel-example-2" data-slide-to="3"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="/imgs/museum.jpg" alt="First slide">
                    <div class="mask rgba-black-strong full-bg-img flex-center white-text">
                        <ul class="animated fadeInUp col-md-12 list-unstyled list-inline hide">
                            <li>
                                <p class="h2-responsive font-weight-bold text-uppercase py-1 hide" style="color: orange;">पधारो म्हारे देश</p>
                            </li>
                            <li>
                                <p class="h1-responsive font-weight-bold text-uppercase py-1 hide">INCREDIBLE RAJASTHAN!</p>
                            </li>
                            <li>
                                <p class="h3-responsive font-weight-bold text-uppercase py-2 hide" style="color: orange;">BE ON A DATE WITH YOURSELF IN RAJASTHAN </p>
                            </li>
                            <li class="list-inline-item">
                                <a href="#gallery" class="btn btn-lg rounded-pill" style="background-color: #8ab92d;transition: all 0.3s ease-in-out;">Explore <i class="fas fa-search-location"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Junagarh Museum</h3>
                    <p>Bikaner, Rajasthan</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="/imgs/hawamahal.jpg" alt="Second slide">
                    <div class="mask rgba-black-strong full-bg-img flex-center white-text">
                        <ul class="animated fadeInUp col-md-12 list-unstyled list-inline hide">
                            <li>
                                <p class="h2-responsive font-weight-bold text-uppercase py-1 hide" style="color: orange;">पधारो म्हारे देश</p>
                            </li>
                            <li>
                                <p class="h1-responsive font-weight-bold text-uppercase py-1 hide">INCREDIBLE RAJASTHAN!</p>
                            </li>
                            <li>
                                <p class="h3-responsive font-weight-bold text-uppercase py-2 hide" style="color: orange;">BE ON A DATE WITH YOURSELF IN RAJASTHAN </p>
                            </li>
                            <li class="list-inline-item">
                                <a href="#gallery" class="btn btn-lg rounded-pill" style="background-color: #8ab92d;transition: all 0.3s ease-in-out;">Explore <i class="fas fa-search-location"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">HawaMahal</h3>
                    <p>Jaipur, Rajasthan</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="/imgs/desert.jpg" alt="Third slide">
                    <div class="mask rgba-black-light full-bg-img flex-center white-text">
                        <ul class="animated fadeInUp col-md-12 list-unstyled list-inline hide">
                            <li>
                                <p class="h2-responsive font-weight-bold text-uppercase py-1 hide" style="color: orange;">पधारो म्हारे देश</p>
                            </li>
                            <li>
                                <p class="h1-responsive font-weight-bold text-uppercase py-1 hide">INCREDIBLE RAJASTHAN!</p>
                            </li>
                            <li>
                                <p class="h3-responsive font-weight-bold text-uppercase py-2 hide" style="color: orange;">BE ON A DATE WITH YOURSELF IN RAJASTHAN </p>
                            </li>
                            <li class="list-inline-item">
                                <a href="#gallery" class="btn btn-lg rounded-pill" style="background-color: #8ab92d;transition: all 0.3s ease-in-out;">Explore <i class="fas fa-search-location"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Sand Dunes</h3>
                    <p>Rajasthan</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="/imgs/hills.jpg" alt="Fourth slide">
                    <div class="mask rgba-black-light full-bg-img flex-center white-text">
                        <ul class="animated fadeInUp col-md-12 list-unstyled list-inline hide">
                            <li>
                                <p class="h2-responsive font-weight-bold text-uppercase py-1 hide" style="color: orange;">पधारो म्हारे देश</p>
                            </li>
                            <li>
                                <p class="h1-responsive font-weight-bold text-uppercase py-1 hide">INCREDIBLE RAJASTHAN!</p>
                            </li>
                            <li>
                                <p class="h3-responsive font-weight-bold text-uppercase py-2 hide" style="color: orange;">BE ON A DATE WITH YOURSELF IN RAJASTHAN </p>
                            </li>
                            <li class="list-inline-item">
                                <a href="#gallery" class="btn btn-lg rounded-pill" style="background-color: #8ab92d;transition: all 0.3s ease-in-out;">Explore <i class="fas fa-search-location"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Bahubali Hills</h3>
                    <p>Udaipur, Rajasthan</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>


    <!-- Mobile -->
    <div class="container-fluid text-center my-5 show">
        <ul class="animated fadeInUp col-md-12 list-unstyled list-inline">
            <li>
                <h2 class="font-weight-bold text-uppercase py-1" style="color: orange;">पधारो म्हारे देश</h2>
            </li>
            <li>
                <h1 class="font-weight-bold text-uppercase py-1">INCREDIBLE RAJASTHAN!</h1>
            </li>
            <li>
                <h3 class="font-weight-bold text-uppercase py-2" style="color: orange;">BE ON A DATE WITH YOURSELF IN RAJASTHAN </h3>
            </li>
            <li class="list-inline-item">
                <a href="#gallery" class="btn btn-lg rounded-pill" style="background-color: #8ab92d;transition: all 0.3s ease-in-out;">Explore <i class="fas fa-search-location"></i></a>
            </li>
        </ul>
    </div>





    <!-- Tour Packages -->
    <div class="container-fluid p-5">
        <p class="h1-responsive d-flex align-items-center justify-content-center"><b>Rajasthan Tour Packages</b></p>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col my-3">
                <div class="card h-100 text-center">
                    <img src="imgs/tour/tr1.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">16 Days-Jaisalmer Rajasthan Tour</h5>
                        <p class="card-text">
                            Jaipur - Pushkar - Udaipur - Jodhpur - Jaisalmer - Bikaner -Mandawa
                        </p>
                        <a href="#!" class="btn peach-gradient btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card h-100 text-center">
                    <img src="imgs/tour/tr2.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">15 Days-Jaipur Rajasthan Tour Itinerary</h5>
                        <p class="card-text">
                            Jaipur - Samode - Mandawa - Khimsar - Jaisalmer - Jodhpur - Udaipur
                        </p>
                        <a href="#!" class="btn peach-gradient btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card h-100 text-center">
                    <img src="imgs/tour/tr3.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">24 Days-Camel Safari Rajasthan Tour</h5>
                        <p class="card-text">
                            Ajmer - Jaisalmer - Jodhpur - Udaipur - Chittaurgarh - Sawai Madhopur
                        </p>
                        <a href="#!" class="btn peach-gradient btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col my-3">
                <div class="card h-100 text-center">
                    <img src="imgs/tour/tr4.jpg" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">15 Days-Rajasthan Forts & Palaces Tour</h5>
                        <p class="card-text">
                            Madhogarh - Jaipur - Chhatra Sagar - Udaipur - Rohet - Jaisalmer - Khimsar - Samode
                        </p>
                        <a href="#!" class="btn peach-gradient btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About US -->
    <div class="container-fluid p-5" id="about">
        <p class="h1-responsive d-flex align-items-center justify-content-center"><b>About Us</b></p>
        <div class="container-lg p-5" id="about-info">
            <p class="h3-responsive text-white">About Tour Rajasthan</p>
            <span class="h6-responsive text-white">
                <ul>
                    <li>We have wide Varieties of Hotel & Resorts to accomodate you. 3D4N or 15D16N totally
                        upto
                        you.</li>
                    <li>Ammenties Selection for every price options.</li>
                    <li>Visa Ready - we got you everything covered.</li>
                    <li>Personalized Travel Plans section bachelors to couples.</li>
                    <li>Minimal custom duties and charges so you are free to explore your own unique options.
                    </li>
                </ul>
            </span>
            <a href="#contact" type="button" class="btn btn-info rounded-pill">Contact Us</a>
        </div>
    </div>



    <!-- Gallery -->
    <div class="container-fluid p-5" id="gallery">
        <p class="h1-responsive d-flex align-items-center justify-content-center"><b>You'll fall in love with Rajasthan</b></p>

        <div class="row row-cols-1 row-cols-lg-3 g-4">
            <?php
            foreach ($query as $q) {
                $cityName = $q['city'] ?>
                <div class="col my-3">
                    <a href="<?php echo "city.php?city=$cityName"; ?>">
                        <div class="card h-100 text-center rounded shadow-sm city-card" style="border: 1px solid #ccc;">
                            <img class="img-fluid" src="<?php echo $q['city_img']  ?>" class="img-fluid rounded-start" alt="city_img">
                            <div class="card-body">
                                <h5 class="card-title"><b><?php echo $q['city_name']; ?></b></h5>
                                <p class="card-text"><?php echo $q['city_quote']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php }  ?>
        </div>
    </div>



    <!-- Contact Us -->
    <div class="container-fluid my-5" id="contact">
        <p class="h1-responsive d-flex align-items-center justify-content-center"><b>Contact Us</b></p>
    </div>

    <!--The div element for the map -->
    <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=jaipur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://putlocker-is.org">putlocker</a><br>
            <style>
                .mapouter {
                    height: 400px;
                    width: 100%;
                }
            </style>
            <a href="https://www.embedgooglemap.net">website maps free</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 400px;
                    width: 100%;
                }
            </style>
        </div>
    </div>









    <!-- Footer -->
    <footer class="page-footer font-small pt-4 " style="background-color: var(--main-bg-color);">

        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3 d-flex flex-column align-items-center justify-content-center">

                    <!-- Content -->
                    <p class="h3-responsive"><i class="fas fa-map-marker-alt"></i> Address</p>
                    <p class="h5-responsive">XYZ area, Jaipur, Rajasthan</p> <br>

                    <p class="h3-responsive"><i class="fas fa-envelope"></i> Email</p>
                    <p class="h5-responsive">this@this.com</p> <br>

                    <p class="h3-responsive"><i class="fas fa-phone"></i> Phone</p>
                    <p class="h5-responsive">+9189xxxxxxxx</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3 ">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3 d-flex flex-column align-items-center justify-content-center">

                    <!-- Content -->
                    <p class=""><img class="img-fluid" src="/icon/logo.png" alt="logo"></p>

                </div>
            </div>
        </div>

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                    <i class="fab fa-github"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->


        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="#"> Tour Rajasthan</a>
        </div>

    </footer>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enquiry Form</h5>
                    <a data-bs-dismiss="modal"><i class="far fa-times-circle"></i></a>
                </div>
                <div class="modal-body p-0">
                    <!--Section: Content-->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-6 col-md-4 modal-left bg-image"></div>
                                <div class="col-md-8">

                                    <form class="m-4" method="POST">

                                        <p class="h3-responsive mb-3 fw-normal"><b>Get the Best Rajasthan Tour Packages</b></p>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" name="number" placeholder="Phone Number">
                                        </div>
                                        <div class="form-floating mb-3">
                                            <div id="dateHelp" class="form-text">Arrival Date</div>
                                            <input type="date" class="form-control" name="date" placeholder="Arrival Date">
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select id="country" class="form-control" name="country">
                                                <option value="" selected disabled hidden>Select Country</option>
                                                <option value="Afganistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire">Bonaire</option>
                                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Canary Islands">Canary Islands</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Channel Islands">Channel Islands</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos Island">Cocos Island</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote DIvoire">Cote DIvoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaco">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Ter">French Southern Ter</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Great Britain">Great Britain</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="India">India</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea North">Korea North</option>
                                                <option value="Korea Sout">Korea South</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Midway Islands">Midway Islands</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Nambia">Nambia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                <option value="Nevis">Nevis</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau Island">Palau Island</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Phillipines">Philippines</option>
                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="St Barthelemy">St Barthelemy</option>
                                                <option value="St Eustatius">St Eustatius</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                <option value="St Lucia">St Lucia</option>
                                                <option value="St Maarten">St Maarten</option>
                                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                <option value="Saipan">Saipan</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="Samoa American">Samoa American</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Tahiti">Tahiti</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                <option value="United States of America">United States of America</option>
                                                <option value="Uraguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State">Vatican City State</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                <option value="Wake Island">Wake Island</option>
                                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>

                                        <button class="w-100 btn peach-gradient rounded" type="submit" name="submit">Submit</button>
                                    </form>

                                    <div class="container px-4 mb-3" style="color: #506d85;">
                                        <p class="h4-responsive">Why Travel with us?</p>
                                        <div class="row">
                                            <div class="col">
                                                <p class="h6-responsive"><i class="fas fa-rupee-sign"></i>Best Price Guaranteed</p>
                                            </div>
                                            <div class="col">
                                                <p class="h6-responsive"><i class="fas fa-cog"></i>Package Customization</p>
                                            </div>
                                            <div class="col">
                                                <p class="h6-responsive"><i class="fas fa-hands-helping"></i>24X7 Trip Assistance</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>






    <script src="https://kit.fontawesome.com/3ed820adb2.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>










</body>

</html>