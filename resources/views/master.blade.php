<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Progressive Safety</title>

    <meta name="keywords" content="">

    <script type="text/javascript" src="js/pace.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/pace.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.red_edit.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
</head>

<body>
    <div id="all" class="scrollbar-light">

        <header>

            <!-- *** TOP ***
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contact us on +420 777 555 333 or hello@universal.com.</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                        <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>

                            <div class="login">
                                <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>
                                <a href="customer-register.html"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
-->
            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

                <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand home" href="/">
                                <img src="img/logo@200px.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="img/logo@200px.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>

                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                                  <a class="nav-link" href="/">Hem</a>
                                </li>
                                <li class="nav-item {{ Request::is('products*') ? 'active' : '' }}">
                                  <a class="nav-link" href="/products">Produkter</a>
                                </li>
                                <li class="nav-item {{ Request::is('how-it-works') ? 'active' : '' }}">
                                  <a class="nav-link" href="/how-it-works">Så funkar det</a>
                                </li>
                            <!--    <li class="nav-item {{ Request::is('customers') ? 'active' : '' }}">
                                  <a class="nav-link" href="/customers">Kunder</a>
                                </li>
                            -->
                                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                                    <a class="nav-link" href="/contact">Kontakt</a>
                                </li>
                                <li class="nav-item {{ Request::is('order') ? 'active' : '' }}" style="background:#ed1b12;">
                                  <a class="nav-link" href="http://eepurl.com/cjbtmr" style="color:white;">Beställ</a>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->
                    </div>


                </div>
                <!-- /#navbar -->


        </header>

        @if (!Request::is('/'))
        <!-- Is only working right now with one level navigation. -->
                <div id="heading-breadcrumbs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h1>{{ App\Classes\PSTools::urltostring() }}</h1>
                            </div>
                            <div class="col-md-5">
                                <ul class="breadcrumb">
                                    <li><a href="/">Hem</a>
                                    </li>
                                    <li>
                                        {{ App\Classes\PSTools::urltostring() }}
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
        @endif


        @yield('content')


        <!-- *** GET IT ***

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>Do you want cool website like this one?</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="btn btn-template-transparent-primary">Buy this template now</a>
                </div>
            </div>
        </div>

_________________________________________________________ -->
        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->

        <footer id="footer">
            <div class="container">
                <div class="col-md-3 col-sm-6">
                    <h4>Affärsidé</h4>
                      <p style="font-size: 1.4rem;">Progressive Safety är ett svenskt bolag som utvecklar livsavgörande hjälpmedel inom området brandskydd. </p>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4 class="inverse-red">Företaget</h4>
              <!--      <h5><a href="/team" class="inverse">Team</a></h5>
                    <h5><a href="/our-story" class="inverse">Vår Story</a></h5> -->
                    <h5><a href="/media" class="inverse">Press</a></h5>

                </div>

                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4 class="inverse-red">Återförsäljare</h4>
                    <h5><a href="http://www.presto.se" class="inverse">Presto Brandsäkerhet AB</a></h5>
                    <h5><a href="http://www.dafo.se" class="inverse">Dafo Brand</a></h5>
                    <h5><a href="http://www.kidde.se" class="inverse">Kidde Sweden AB</a></h5>
                    <h5><a href="/resellers" class="inverse">Mer...</a></h5>

                </div>

                <!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6">

                    <h4>Kontakt</h4>

                    <p style="font-size: 1.4rem;" <strong>Progressive Safety</strong>
                        <br>Gjuterigatan 9
                        <br>553 18 Jönköping
                    </p>

                    <a href="/contact" class="btn btn-small btn-template-main">Gå till kontaktsida</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>

            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p><center>2016. Progressive Safety Sweden AB<center></p>
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>
    <script src="js/get-shit-done.js"></script>

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>

    @yield('script')


</body>

</html>
