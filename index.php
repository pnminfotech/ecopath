<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ecopath</title>
    <meta name="author" content="Fourth Partner Energy">
    <meta name="description"
        content="Fourth Partner Energy has grown to become one of India's largest solar energy company in the distributed solar sector. We are one of the largest solar solution providers for businesses and industries.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=”googlebot” content=”nosnippet”>
    <!-- favicons -->
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="assets/favicon/apple-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">

    <!-- load google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- all stylesheets include start -->

    <!-- SmartMenus jQuery Bootstrap 4 Addon CSS -->

    <!-- <link href="./assets/navNew/smartmenus-1.1.1/addons/bootstrap-4/jquery.smartmenus.bootstrap-4.css" rel="stylesheet"> -->
    <link href="./assets/navNew/smartmenus-1.1.1/addons/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="../assets/css/custom.css" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- revolution slider css -->
    <link rel="stylesheet" href="assets/css/rev_slider/settings.css">
    <link rel="stylesheet" href="assets/css/rev_slider/layers.css">
    <link rel="stylesheet" href="assets/css/rev_slider/navigation.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">


    <!-- theme style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- all stylesheets include end -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,600,700,800" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DCTB04GEZS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-DCTB04GEZS');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131184752-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-131184752-1');
        gtag('config', 'AW-481784451');
    </script>

   

    

   

    <!-- <script>

    (function(){
    
      window.ldfdr = window.ldfdr || {};
    
      (function(d, s, ss, fs){
    
        fs = d.getElementsByTagName(s)[0];
    
        function ce(src){
    
          var cs  = d.createElement(s);
    
          cs.src = src;
    
          setTimeout(function(){fs.parentNode.insertBefore(cs,fs)}, 1);
    
        }
    
    
    
        ce(ss);
    
      })(document, 'script', 'https://sc.lfeeder.com/lftracker_v1_YEgkB8l02Ay8ep3Z.js');
    
    })();
    
    </script> -->



    <style>
        #index-video {
            height: 100%;
            width: 100%;
            object-fit: cover;
            z-index: -100;
            right: 0;
            bottom: 0;
            background: url(../img/index-image.jpg) no-repeat center center;
            background-size: cover;
            overflow: hidden;
        }

        .index-video-wrapper {
            height: 100%;
            width: 100%;
            background: url(../img/index-image.jpg) no-repeat center center;
            background-size: cover;
        }

        @-webkit-keyframes ticker {
            0% {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                visibility: visible;
            }

            100% {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        @keyframes ticker {
            0% {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                visibility: visible;
            }

            100% {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        .ticker-heading {
            position: absolute;
            background: #F8931F;

            left: 0;
            top: 10;

            padding: 12px 40px;
            z-index: 2;
            color: white;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 600;
        }

        .ticker-wrap .ticker__item:before {
            content: "";
            height: 11px;
            width: 11px;
            display: inline-block;
            background-color: #1074bc;
            border-radius: 100%;
            position: relative;
            margin-right: 15px;
        }

        .ticker-heading:after {
            /* content: "";*/
            width: 0;
            height: 10px;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            border-left: 11px solid #A6C22F;
            position: absolute;
            margin-left: 40px;
        }

        .ticker-wrap {
            position: relative;
            bottom: 0;
            width: 100%;
            overflow: hidden;
            height: 5.5rem;
            background-color: #f9f9f9;
            padding-left: 100%;
            box-sizing: content-box;
        }

        .ticker-wrap .ticker:hover {
            -webkit-animation-play-state: paused;
            -moz-animation-play-state: paused;
            -ms-animation-play-state: paused;
            -o-animation-play-state: paused;
            animation-play-state: paused;
        }

        .ticker-wrap .ticker {
            display: inline-block;
            height: 2.5rem;
            line-height: 2.5rem;
            white-space: nowrap;
            padding-right: 100%;
            box-sizing: content-box;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-name: ticker;
            animation-name: ticker;
            -webkit-animation-duration: 30s;
            animation-duration: 30s;
        }

        .ticker-wrap .ticker__item {
            display: inline-block;
            padding: 10 2rem;
            font-size: 18px;
            color: #454545;
            margin-top: 13px;
        }



        #scrollbutton {
            display: inline-block;
            background-color: #83b735;
            width: 50px;
            height: 50px;
            text-align: center;
            border-radius: 4px;
            position: fixed;
            bottom: 30px;
            right: 30px;
            transition: background-color .3s,
                opacity .5s, visibility .5s;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        #scrollbutton::after {
            content: "\f077";
            font-family: FontAwesome;
            font-weight: normal;
            font-style: normal;
            font-size: 2em;
            line-height: 50px;
            color: #fff;
        }

        #scrollbutton:hover {
            cursor: pointer;
            background-color: #333;
        }

        #scrollbutton:active {
            background-color: #555;
        }

        #scrollbutton.show {
            opacity: 1;
            visibility: visible;
        }

        /* Styles for the content section */


        @media (min-width: 500px) {

            #button {
                margin: 30px;
            }
        }
    </style>
</head>




<!-- https://ik.imagekit.io/dbekk5x4n/services/poxidation.jpeg?updatedAt=1716025987619 -->
<body>

    <!-- START Header -->

    <!-- /.container-fluid -->

    <?php include 'header.php' ?>
    <!-- END Header -->


    <div class="container-fluid  ">
        <div class="row ">
            <div id="imageCarousel" class="carousel slide " data-interval="5000" data-ride="carousel" data-pause="false"
                data-wrap="true">
                <ol class="carousel-indicators  ">
                    <li data-target="#imageCarousel" data-slide-to="0" class="active "></li>
                    <li data-target="#imageCarousel" data-slide-to="1"></li>


                </ol>
                <div class="carousel-inner">
                    <!-- Slide-1 -->
                    <div class="item active">
                        <img src="https://ik.imagekit.io/dbekk5x4n/slider/slider1.jpg" alt="Ground Mounted">
                        <!-- <div class=" overlayContent mx-auto">
                            <div class="carousel-caption">
                                <p class="text-center text-dark">1 MWp ground-mounted solar installation at Aurangabad,
                                    Maharashtra</p>
                            </div>
                        </div> -->
                    </div>
                    <!-- Slide-2 -->
                    <div class="item">
                        <img src="https://ik.imagekit.io/dbekk5x4n/slider/slide-01.jpg" alt="Onsite Rooftop Solar">
                        <!-- <div class=" overlayContent mx-auto">
                            <div class="carousel-caption">
                                <p class="text-center">912 kWp rooftop solar installation at Talegaon, Maharashtra</p>
                            </div>
                        </div> -->
                    </div>
        


                </div>
            </div>
        </div>
    </div>




        <!-- Start Welcome Section -->
        <section class="pad-t80 pad-b80 welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title1 text-center">
                            <h2 class="welcome-title">Sun & We!</h2>
                            <p style='color:#343434;text-align: center;'>Affordable Electricity | Energy Transition |
                                Climate Action</p>

                        </div>
                        <p style="color:#000000; text-align:justify;">
                            <!--<br>Fourth Partner Energy (4PEL) is India’s leading Renewable Energy Solutions Company, catering to Commercial & Industrial businesses. We are committed to accelerating Decarbonization across the corporate sector, not just in India but across South and Southeast Asia. We offer Energy-as-a-Service (EaaS) to help businesses offset almost 100% of their energy requirement through Clean & Green sources.<br><br> 
                            Founded in 2010 as a Solar products and EPC company, in just over a decade 4PEL has emerged a leading RE solutions provider owing to our in-house expertise across energy analysis, design, financing, procurement, construction, operation and maintenance of renewables infrastructure – while offering allied services. We have leveraged technology and innovation to become the top destination for companies looking to embark on or accelerate their Sustainability journey.<br><br>
                            Fourth Partner Energy is today operational across Vietnam, Indonesia, Bangladesh and Sri Lanka, along with a pan-India presence. Our customised, integrated Renewable Energy solutions include Onsite and Offsite Solar & Wind, Battery Storage, Wind-Solar Hybrid, Energy Trading and EV Charging Infrastructure. Through our full suite of integrated energy solutions, we are able to offer Round-the-Clock Renewables to our esteemed <clients class="-->
                            <br>Perennial increase in the energy demand, increasing prices and shortage of conventional
                            energy sources in India had been instrumental to look for alternative sources of energy.
                            With about 300 clear, sunny days in a year India is an ideal land for harnessing maximum
                            amount of energy.



                            With a vision of eradicating energy poverty of India, Ecopath Renewables has embarked on the
                            journey of providing Green Energy solutions across India.<br /><br /> It is an initiative of
                            5 technocrats having over 30+ years of cumulative experience in diverse areas of Renewable
                            Energy Industry; with special focus on Solar Energy.<br><br> The experience includes design
                            and development of kW to MW scale solar power plants, design and development of solar mini
                            grids, development of small scale solar Cold Storages for small and marginal farmers,
                            Operation & Maintenance of solar power plants.



                            With in-house ability of design, installation & maintenance of solar plants, advance tools &
                            instruments, team with international experience and pan India access of manpower through its
                            partners, ECOPATH is in the position of providing Renewable Energy Solutions across India.



                            </clients>

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Welcome Section -->

        <!-- Start Counter Section -->
        <section class="pad-t80 pad-b80 parallax"
            style="background-image: url(https://ik.imagekit.io/dbekk5x4n/bg/fp-bg.png); background-position: left; background-color:#f2f5f8; background-repeat:no-repeat; background-size:inherit; background-attachment: initial;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title3 text-center">
                            <h2 class="">KEY MILESTONES AT <span>A GLANCE</span></h2>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".5s">
                        <div class="animated-counter text-center white">
                            <span class="animated-number" data-from="0" data-to="1">1</span>
                            <span class="comma">.</span>
                            <span class="animated-number" data-from="0" data-to="4">4</span>
                            <span class="title">GW</span>
                            <h5>Portfolio Managed</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="0.2s">
                        <div class="animated-counter text-center white">
                            <span class="animated-number" data-from="0" data-to="300">300</span>
                            <span class="title">+</span>
                            <h5>Happy Clients</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".4s">
                        <div class="animated-counter text-center white">
                            <div class="animated-number" data-from="0" data-to="200">200</div>
                            <h5>Locations</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
                        <div class="animated-counter text-center white">
                            <span class="animated-number" data-from="0" data-to="2">2</span><span class="comma">,</span>
                            <span class="animated-icon" style="font-size:32px;font-weight:800;">000</span>
                            <h5>Plants</h5>
                        </div>
                    </div>

                    <div class="clear pad30 hidden-xs"></div>

                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".8s">
                        <div class="animated-counter text-center white">
                            <span class="animated-number" data-from="0" data-to="8">8</span><span class="comma">,</span>
                            <span class="animated-number" data-from="0" data-to="20">20</span><span
                                class="comma">,</span>
                            <span class="animated-number" data-from="0" data-to="13">13</span><span
                                class="comma">,</span>
                            <span class="animated-icon" style="font-size:30px;font-weight:900;">628</span>
                            <h5>Trees Planted / Year</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="1s">
                        <div class="animated-counter text-center white">
                            <span class="animated-number" data-from="0" data-to="17">17</span><span
                                class="comma">,</span>
                            <span class="animated-icon" style="font-size: 30px;font-weight:800;" data-from="0"
                                data-to="85">85</span><span class="comma">,</span>
                            <span class="animated-number" data-from="0" data-to="638">638</span>
                            <h5>Tons Reduction in Carbon Emissions / Year</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="1.2s">
                        <div class="animated-counter text-center white">
                            <span class="animated-number" data-from="0" data-to="8">8</span><span class="comma">,</span>
                            <span class="animated-number" data-from="0" data-to="56">56</span><span
                                class="comma">,</span>
                            <span class="animated-number" data-from="0" data-to="378">378</span>
                            <h5>Tons of Coal Saved / Year</h5>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="1.4s">
                        <div class="animated-counter text-center white">
                            <span class="animated-number" style="font-size: 30px;" data-from="0"
                                data-to="4">4</span><span class="comma">,</span>
                            <span class="animated-icon" style="font-size: 30px;font-weight:700;" data-from="0"
                                data-to="19">19</span><span class="comma">,</span>
                            <span class="animated-number" style="font-size: 30px;" data-from="0" data-to="0">0</span>
                            <span class="animated-number" style="font-size: 30px;" data-from="0"
                                data-to="7">7</span><span class="comma">,</span>
                            <span class="animated-number" style="font-size: 30px;" data-from="0"
                                data-to="84">84</span><span class="comma">,</span>
                            <span class="animated-icon" style="font-size:30px;font-weight:600;">000</span>
                            <h5>Litres of Water Saved / Year</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Section -->

        <!-- Start Client Section -->
        <section class="client-section pad80" style="background:#f9f9f9;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>OUR <span>PROJECTS</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="clients-carousel">
                            <!-- <div class="clients-item text-center white">
								<a href="#">
                                    <img src="assets/images/slide/1.jpg" alt="Client's Logo">
                                </a>
							</div> -->
                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/2.jpeg" alt="Client's Logo"
                                        style="width:285px;height: 214px;">
                                </a>
                            </div>
                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/3.jpeg" alt="Client's Logo"
                                        style="width:285px;height: 214px;">
                                </a>
                            </div>
                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/4.jpg" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/5.jpeg" alt="Client's Logo"
                                        style="width:285px;height: 214px;">
                                </a>
                            </div>
                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/6.jpg" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/7.jpg" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/8.jpg" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/9.jpg" alt="Client's Logo">
                                </a>
                            </div>

                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/10.jpeg" alt="Client's Logo"
                                        style="width:285px;height: 214px;">
                                </a>
                            </div>

                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/11.jpg" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white" style="margin: 6px 6px;">
                                <a href="#">
                                    <img src="https://ik.imagekit.io/dbekk5x4n/slide/12.JPG" alt="Client's Logo">
                                </a>
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client Section -->

        <!-- Start Image Content Section -->

        <section class="parallax dark-section" style="background-image: url(https://ik.imagekit.io/dbekk5x4n/bg/bg-12.jpg); ">




            <div class="">
                <div class="row">
                    <div class="col-md-12 col-sm-12"></div>
                    <div class="adv-section col-md-12 col-sm-12 ">
                        <div class="col-md-12 col-sm-12  wow fadeInRight" data-wow-duration="2s">

                            <div class="container">
                                <div class="section-title3 pad-t30 class=" text-center">
                                    <h3 class="text-center">THE ECOPATH RENEWABLE ADVANTAGE</h3><br>
                                </div>
                                <div class="feature-list">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="feature-2 wow fadeInRight" data-wow-duration="2s">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="feature-icon text-center">
                                                            <img src="assets/images/icon/Customised Financial Models.png"
                                                                alt="solar rooftop india" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="javascript:void(0);" style="cursor: default;">
                                                            <h3 class="media-heading">CUSTOMISED FINANCIAL MODELS</h3>
                                                        </a>
                                                        <p>Capex, Opex & EMI to ensure ~40% cost-savings on Power</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-2 wow fadeInRight" data-wow-duration="2s">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="feature-icon text-center">
                                                            <img src="assets/images/icon/Pioneer in Distributed and Open Access Solar in India.png"
                                                                alt="solar rooftop india" style="opacity: 0.6;" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="javascript:void(0);" style="cursor: default;">
                                                            <h3 class="media-heading">PIONEER IN DISTRIBUTED AND OPEN
                                                                ACCESS SOLAR IN INDIA</h3>
                                                        </a>
                                                        <p>Providing long-term clarity in Tariffs – PPAs for 20-25 yrs
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="col-md-6">
                                            <div class="feature-2 wow fadeInRight" data-wow-duration="2s">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="feature-icon text-center">
                                                            <img src="assets/images/icon/Best-in-Industry Project Execution.png"
                                                                alt="solar rooftop india" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="javascript:void(0);" style="cursor: default;">
                                                            <h3 class="media-heading">BEST-IN-INDUSTRY PROJECT EXECUTION
                                                            </h3>
                                                        </a>
                                                        <p style="word-wrap: break-word">85% on-time Delivery, BIC
                                                            Safety compliant, Sustainable Supply Chain</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="feature-2 wow fadeInRight" data-wow-duration="2s">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="feature-icon text-center">
                                                            <img src="assets/images/icon/Best-Performing Asset Portfolio.png"
                                                                alt="solar rooftop india" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="javascript:void(0);" style="cursor: default;">
                                                            <h3 class="media-heading">BEST-PERFORMING ASSET PORTFOLIO
                                                            </h3>
                                                        </a>
                                                        <p>Cutting-edge technology for monitoring asset performance –
                                                            AI, IoT, Remote-Monitoring</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                        <div class="col-md-6">
                                            <div class="feature-2 wow fadeInRight" data-wow-duration="2s">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="feature-icon text-center">
                                                            <img src="assets/images/icon/Robust Financial Network of Investors, Lenders.png"
                                                                alt="solar rooftop india" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="javascript:void(0);" style="cursor: default;">
                                                            <h3 class="media-heading">Our Vision</h3>
                                                        </a>
                                                        <p style="word-wrap: break-word">World without Energy Poverty.
                                                            World with Green Energy</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="feature-2 wow fadeInRight" data-wow-duration="2s">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="feature-icon text-center">
                                                            <img src="assets/images/icon/Single Destination for RE Ancillary Services.png"
                                                                alt="solar rooftop india" />
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="javascript:void(0);" style="cursor: default;">
                                                            <h3 class="media-heading">SINGLE DESTINATION FOR RE
                                                                ANCILLARY SERVICES</h3>
                                                        </a>
                                                        <p>Access to cheaper capital, storage, electric mobility, carbon
                                                            credits enabling Round-the-Clock RE</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>




                        </div>

                    </div>
                </div>

        </section>
        <!-- End Image Content Section -->


        <!-- Start Map Box Section -->
        <section class="pad-t80 pad-b80 light-section map welcome"
            style="background-image: url(https://ik.imagekit.io/dbekk5x4n/bg/fp-bg.png); background-position: left bottom; background-color:#f2f5f8; background-repeat:no-repeat; background-size:inherit; background-attachment: initial;">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title1 text-center">
                            <h2>Pan-India <span>Presence</span></h2>
                            <h3>We don't just say it. We mean it!</h3>
                            <h4>200+ PLANTS EXECUTED | ACROSS 24 STATES </h4>
                        </div>
                        <div class="clear pad25"></div>
                    </div>
                </div>
                <div class="state-overflow">

                    <div class="container-map">
                        <!-- Map html - add the below to your page -->
                        <div class="lg-map-wrapper" data-map="https://www.fourthpartner.co/assets/js/map/india.js">
                            <div id="lg-map"></div>
                        </div>
                        <!-- End Map html -->
                    </div>
                </div>
                <div class="clear pad50"></div>
            </div>
        </section>
        <!-- End Map Section -->

        <!-- Start Testimonial Section -->

        <!-- End Testimonial Section -->

        <section class="client-section pad80" style="background:#f9f9f9;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center">
                            <h2>OUR <span>CLIENTS</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="clients-carousel">
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/hyundai.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/mahendira.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/itc.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/HL.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/tcs.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/myntra.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/1.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/akzonoble-logo.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/sanofi.png" alt="Client's Logo">
                                </a>
                            </div>
                            <!--<div class="clients-item text-center white">
								<a href="#">
                                    <img src="assets/images/client/4.png" alt="Client's Logo">
                                </a>
							</div>-->
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/5.png" alt="Client's Logo">
                                </a>
                            </div>
                            <!--<div class="clients-item text-center white">
								<a href="#">
                                    <img src="assets/images/client/6.png" alt="Client's Logo">
                                </a>
							</div>
							<div class="clients-item text-center white">
								<a href="#">
                                    <img src="assets/images/client/7.png" alt="Client's Logo">
                                </a>
							</div>-->
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/8.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/9.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/10.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/11.png" alt="Client's Logo">
                                </a>
                            </div>
                            <!--<div class="clients-item text-center white">
								<a href="#">
                                    <img src="assets/images/client/12.png" alt="Client's Logo">
                                </a>
							</div>-->
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/13.png" alt="Client's Logo">
                                </a>
                            </div>
                            <!--<div class="clients-item text-center white">
								<a href="#">
                                    <img src="assets/images/client/14.png" alt="Client's Logo">
                                </a>
							</div>
							<div class="clients-item text-center white">
								<a href="#">
                                    <img src="assets/images/client/15.png" alt="Client's Logo">
                                </a>
							</div>-->
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/16.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/bharati.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/bridgstone.png" alt="Client's Logo">
                                </a>
                            </div>
                            <div class="clients-item text-center white">
                                <a href="#">
                                    <img src="assets/images/client/unilever.png" alt="Client's Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Start Footer & Copyright Section -->


        <?php include 'footer.php' ?>
        <!-- End Footer & Copyright Section -->


        <a id="scrollbutton"></a>
        <!-- End Back to Top -->

        <!-- all js include start -->
        <!-- jquery latest version -->
        <script src="assets/js/jquery-3.1.1.min.js"></script>
        <!-- bootstrap latest version -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <!-- revolution slider js files start -->
        <script src="assets/js/rev_slider/jquery.themepunch.tools.min.js"></script>
        <script src="assets/js/rev_slider/jquery.themepunch.revolution.min.js"></script>

        <script src="assets/js/rev_slider/extensions/revolution.extension.actions.min.js"></script>
        <script src="assets/js/rev_slider/extensions/revolution.extension.carousel.min.js"></script>
        <script src="assets/js/rev_slider/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="assets/js/rev_slider/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="assets/js/rev_slider/extensions/revolution.extension.migration.min.js"></script>
        <script src="assets/js/rev_slider/extensions/revolution.extension.navigation.min.js"></script>
        <script src="assets/js/rev_slider/extensions/revolution.extension.parallax.min.js"></script>
        <script src="assets/js/rev_slider/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="assets/js/rev_slider/extensions/revolution.extension.video.min.js"></script>
        <!-- revolution slider js files end -->

        <!-- Other jQuery library -->
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.isotope.min.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/js/owl.carousel.js"></script>


        <!-- template main js file -->
        <script src="assets/js/mainV2.js"></script>

    </div>
    <script>
        $('body').on('hidden.bs.modal', '#applicable_policy', function () {
            $(this).removeData('bs.modal');
            $('#mycontent').empty();
        });
        var statearray = JSON.parse(JSON.stringify({
            "AN": {
                "title": "Andaman &#038; Nicobar Islands",
                "statecode": "AN",
                "html": "<div class=\"map-tip-text\"><h3><\/h3><\/div>"
            },
            "AP": {
                "title": "Andhra Pradesh",
                "statecode": "AP",
                "html": "<div class=\"map-tip-text\"><h3>55<\/h3><p>Installations<\/p><\/div>"
            },
            "AR": {
                "title": "Andhra Pradesh",
                "statecode": "AR",
                "html": "<div class=\"map-tip-text\"><h3><\/h3><\/div>"
            },
            "AS": {
                "title": "Assam",
                "statecode": "AS",
                "html": "<div class=\"map-tip-text\"><h3>6<\/h3><p>Installations<\/p><\/div>"
            },
            "BR": {
                "title": "Bihar",
                "statecode": "BR",
                "html": "<div class=\"map-tip-text\"><h3>7<\/h3><p>Installations<\/p><\/div>"
            },
            "CH": {
                "title": "Chandigarh",
                "statecode": "CH",
                "html": "<div class=\"map-tip-text\"><h3>1<\/h3><p>Installation<\/p><\/div>"
            },
            "CT": {
                "title": "Chhattisgarh",
                "statecode": "CT",
                "html": "<div class=\"map-tip-text\"><h3>10<\/h3><p>Installations<\/p><\/div>"
            },
            "DN": {
                "title": "Dadra &#038; Nagar Haveli",
                "statecode": "DN",
                "html": "<div class=\"map-tip-text\"><h3><\/h3><\/div>"
            },
            "DD": {
                "title": "Daman &#038; Diu",
                "statecode": "DD",
                "html": "<div class=\"map-tip-text\"><h3><\/h3><\/div>"
            },
            "DL": {
                "title": "Delhi",
                "statecode": "DL",
                "html": "<div class=\"map-tip-text\"><h3>22<\/h3><p>Installations<\/p><\/div>"
            },
            "GA": {
                "title": "Goa",
                "statecode": "GA",
                "html": "<div class=\"map-tip-text\"><h3>3<\/h3><\/div>"
            },
            "GJ": {
                "title": "Gujarat",
                "statecode": "GJ",
                "html": "<div class=\"map-tip-text\"><h3>53<\/h3><p>Installations<\/p><\/div>"
            },
            "HR": {
                "title": "Haryana",
                "statecode": "HR",
                "html": "<div class=\"map-tip-text\"><h3>69<\/h3><p>Installations<\/p><\/div>"
            },
            "HP": {
                "title": "Himachal Pradesh",
                "statecode": "HP",
                "html": "<div class=\"map-tip-text\"><h3>2<\/h3><p>Installation<\/p><\/div>"
            },
            "JK": {
                "title": "Jammu &#038; Kashmir",
                "statecode": "J&K",
                "html": "<div class=\"map-tip-text\"><h3><\/h3><\/div>"
            },
            "JH": {
                "title": "Jharkhand",
                "statecode": "JH",
                "html": "<div class=\"map-tip-text\"><h3>9<\/h3><p>Installations<\/p><\/div>"
            },
            "KA": {
                "title": "Karnataka",
                "statecode": "KA",
                "html": "<div class=\"map-tip-text\"><h3>69<\/h3><p>Installations<\/p><\/div>"
            },
            "KL": {
                "title": "Kerala",
                "statecode": "KL",
                "html": "<div class=\"map-tip-text\"><h3>11<\/h3><p>Installations<\/p><\/div>"
            },
            "LD": {
                "title": "Lakshadweep",
                "statecode": "LD",
                "html": "<div class=\"map-tip-text\"><h3><\/h3><\/div>"
            },
            "MP": {
                "title": "Madhya Pradesh",
                "statecode": "MP",
                "html": "<div class=\"map-tip-text\"><h3>30<\/h3><p>Installations<\/p><\/div>"
            },
            "MH": {
                "title": "Maharashtra",
                "statecode": "MH",
                "html": "<div class=\"map-tip-text\"><h3>206<\/h3><p>Installations<\/p><\/div>"
            },
            "MN": {
                "title": "Manipur",
                "statecode": "MN",
                "html": "<div class=\"map-tip-text\"><h3><\/h3><\/div>"
            },
            "ML": {
                "title": "Meghalaya",
                "statecode": "ML",
                "html": "<div class=\"map-tip-text\"><h3><\/h3><\/div>"
            },
            "MZ": {
                "title": "Mizoram",
                "statecode": "MZ",
                "html": "<div class=\"map-tip-text\"><h3><\/h3><\/div>"
            },
            "OR": {
                "title": "Odisha",
                "statecode": "OR",
                "html": "<div class=\"map-tip-text\"><h3>12<\/h3><p>Installations<\/p><\/div>"
            },
            "PY": {
                "title": "Puducherry",
                "statecode": "PY",
                "html": "<div class=\"map-tip-text\"><h3>2<\/h3><\/div>"
            },
            "PB": {
                "title": "Punjab",
                "statecode": "PB",
                "html": "<div class=\"map-tip-text\"><h3>16<\/h3><p>Installations<\/p><\/div>"
            },
            "RJ": {
                "title": "Rajasthan",
                "statecode": "RJ",
                "html": "<div class=\"map-tip-text\"><h3>68<\/h3><p>Installations<\/p><\/div>"
            },
            "SK": {
                "title": "Sikkim",
                "statecode": "SK",
                "html": "<div class=\"map-tip-text\"><h3>1<\/h3><p>Installations<\/p><\/div>"
            },
            "TN": {
                "title": "Tamil Nadu",
                "statecode": "TN",
                "html": "<div class=\"map-tip-text\"><h3>69<\/h3><p>Installations<\/p><\/div>"
            },
            "TG": {
                "title": "Telangana",
                "statecode": "TG",
                "html": "<div class=\"map-tip-text\"><h3>70<\/h3><p>Installations<\/p><\/div>"
            },
            "TR": {
                "title": "Tripura",
                "statecode": "TR",
                "html": "<div class=\"map-tip-text\"><h3><\/h3><\/div>"
            },
            "UP": {
                "title": "Uttar Pradesh",
                "statecode": "UP",
                "html": "<div class=\"map-tip-text\"><h3>68<\/h3><p>Installations<\/p><\/div>"
            },
            "UK": {
                "title": "Uttarakhand",
                "statecode": "UK",
                "html": "<div class=\"map-tip-text\"><h3>5<\/h3><p>Installations<\/p><\/div>"
            },
            "WB": {
                "title": "West Bengal",
                "statecode": "WB",
                "html": "<div class=\"map-tip-text\"><h3>30<\/h3><p>Installations<\/p><\/div>"
            }
        }));
        $(document).mouseup(function (e) {
            var container = $(".tooltip-map");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                $('.tooltip-map').hide();
            }
        });
    </script>
    <script src="assets/js/morphext.min.js" type="text/javascript"></script>
    <!--Map Css and Js --->
    <link href="assets/css/map/map.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/map/raphael.js" type="text/javascript"></script>
    <script src="assets/js/map/scale.raphael.js" type="text/javascript"></script>
    <script src="assets/js/map/lg-map.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $("#rev_slider_1").show().revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                spinner: "spinner4",
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        enable: false,
                        style: 'metis',
                        tmp: '',
                        rtl: false,
                        hide_onleave: true,
                        hide_onmobile: true,
                        hide_under: 0,
                        hide_over: 9999,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: 0
                        },
                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 20,
                            v_offset: 0
                        }
                    },
                },
                responsiveLevels: [1240, 1024, 767, 480],
                gridwidth: [1170, 1170, 767, 480],
                gridheight: [600, 480, 380, 280],
                lazyType: "none",
                shadow: 0,
                shuffle: "off",
                autoHeight: "off",
            });
            $(".js-rotating").Morphext({
                // The [in] animation type. Refer to Animate.css for a list of available animations.
                animation: "slideInLeft",
                // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
                separator: "|",
                // The delay between the changing of each phrase in milliseconds.
                speed: 10000,
                complete: function () {
                    // Called after the entrance animation is executed.
                }
            });

            $(".js-rotating1").Morphext({
                // The [in] animation type. Refer to Animate.css for a list of available animations.
                animation: "slideInLeft",
                // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
                separator: ",",
                // The delay between the changing of each phrase in milliseconds.
                speed: 10000,
                complete: function () {
                    // Called after the entrance animation is executed.
                }
            });
        });
    </script>

    <!-- calling from Jquery  Footer html -->
    <script>
        $(document).ready(function () {
            $("#pageFooter").load("/assets/navigation/footer.html");
        });    
    </script>

    <script>

        var btn = $('#scrollbutton');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });


    </script>

    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="./assets/navNew/smartmenus-1.1.1/jquery.smartmenus.js"></script>

    <!-- SmartMenus jQuery Bootstrap 4 Addon -->
    <script type="text/javascript"
        src="./assets/navNew/smartmenus-1.1.1/addons/bootstrap/jquery.smartmenus.bootstrap.js"></script>



    <script
        type="text/javascript"> _linkedin_partner_id = "5016401"; window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || []; window._linkedin_data_partner_ids.push(_linkedin_partner_id); </script>
    <script
        type="text/javascript"> (function (l) { if (!l) { window.lintrk = function (a, b) { window.lintrk.q.push([a, b]) }; window.lintrk.q = [] } var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript"; b.async = true; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s); })(window.lintrk); </script>
    <noscript> <img height="1" width="1" style="display:none;" alt=""
            src="https://px.ads.linkedin.com/collect/?pid=5016401&fmt=gif" /> </noscript>

    <script type="text/javascript">

        _linkedin_partner_id = "766403";

        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];

        window._linkedin_data_partner_ids.push(_linkedin_partner_id);

    </script>
    <script type="text/javascript">

        (function (l) {

            if (!l) {
                window.lintrk = function (a, b) { window.lintrk.q.push([a, b]) };

                window.lintrk.q = []
            }

            var s = document.getElementsByTagName("script")[0];

            var b = document.createElement("script");

            b.type = "text/javascript"; b.async = true;

            b.src = https://snap.licdn.com/li.lms-analytics/insight.min.js;

            s.parentNode.insertBefore(b, s);
        })(window.lintrk);

    </script>

    <noscript>

        <img height="1" width="1" style="display:none;" alt=""
            src=https://px.ads.linkedin.com/collect/?pid=766403&fmt=gif />

    </noscript>
</body>

</html>