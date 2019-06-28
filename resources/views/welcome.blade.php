

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('fronted/img/ico/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('fronted/img/ico/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('fronted/img/ico/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('fronted/img/ico/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" href="{{ asset('fronted/img/ico/apple-touch-icon-57x57.png')}}">

    <title>EMERGENCE ALERT</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('fronted/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('fronted/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('fronted/css/plugins.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('fronted/css/style.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('fronted/font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('fronted/css/pe-icons.css')}}" rel="stylesheet">

</head>

<body id="page-top" class="index">

<div class="master-wrapper">

    <div class="preloader">
        <div class="preloader-img">
            <span class="loading-animation animate-flicker"><img src="{{ asset('fronted/img/loading.GIF')}}" /></span>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand smoothie" href="{{ url('/') }}">EMERGENCY ALERT</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="{{ url('/') }}" >Home </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">CONTROL<span class="pe-7s-angle-down"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>

                @endauth
                        </ul>
                    </li>
                </ul>
        </div>
            @endif


            </ul>
            </li>

            </ul>
        </div>
    </nav>
        <!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>
<!-- Header -->
<header id="headerwrap" class="backstretched fullheight">
    <div class="container vertical-center">
        <div class="intro-text vertical-center text-center smoothie">

            <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.4s">EMERGENCY  <span class="rotate">ALERT</span></div>
            <a href="#welcome" class="mouse page-scroll"><div class="wheel"></div></a>
        </div>
    </div>
</header>

<section id="welcome">
    <div class="section-inner">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100 wow fadeIn" data-wow-delay="0.5s">
                    <h2 class="section-heading">Muraka Neza Kuri EMERGENCY ALERT SYSTEM</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">Twishimiye kubabona muza mudusanga .</h3>
                </div>
            </div>
        </div>

        <div>
            <div class="container">
                <div class="col-md-6 wow fadeInLeft" data-wow-delay="1.5s">
                    <p class="lead">EMERGENCY ALERT SYSTEM  ni SYSTEM YAkozwe nbanyeshuri barangije kaminuza ikazaba izajya ikoreshwa nabaturwanda bose batuye igihugu  </p>

                    <p>Mugihe bakeneye ubutabazi bwibanze . burimo mugihe wibwe ubone impanuka cga uhohotewe wakwitabaza police ukoresheje ino system</p>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('fronted/img/Fire.jpg')}}" class="img-responsive alignright wow fadeInRight" data-wow-delay="0.5s" alt="">
                </div>
            </div>
        </div>

    </div>
</section>

<div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover" style="background-image: url('{{ asset('fronted/img/Fire.jpg')}}');">
    <div class="dark-opaqued section-inner pad-sides-60 match-height" data-mh="promo-inner">
        <h3>EMERGENCY ALERT SYSTEM</h3>
        <p class="lead">•	Tureme company igizwe nurubyiruko rw'u Rwanda; aho buri wese ubishaka ayigana
            kandi bitewe n’ibihigirwa asabwa kuza yitwaje ibihumbi 24000frw bimufasha guhabwa amahugurwa yo
            gutegura no gucunga imishinga iciriritse, akanahabwa ibyangombwa byamufasha gukorera company ahariho hose mugihu.</p>

    </div>
</div>

<div class="col-sm-6 nopadding-lr dark-wrapper opaqued background-cover" style="background-image: url('{{ asset('fronted/img/car.jpg')}}');">
    <div class="dark-opaqued section-inner pad-sides-60 match-height text-right" data-mh="promo-inner">
        <h3>EMERGENCY ALERT SYSTEM</h3>
        <p class="lead">•	Tureme company igizwe n’amasoko y’ubucuruzi: ay’amasoko ashyirwa hirya no hino mugihu.
            Ayamasoko adufasha gukwirakwiza ibicuruzwa bigenda byamamazwa murwego rwo gukangurira abantu ibintu bikorerwa hano iwacu(made in Rwanda).
            Ayamasoko ni umurongo mwiza tunyuzamo ibitekerezo by’uburyo twakora Business binyuze murubyiruko, kandi biba ari inzira nziza zo kugaragaza
            udushya(innovation of made in Rwanda) duhangirwa mugihu cyacu.
        </p>

    </div>
</div>

<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{ asset('fronted/img/violance.png')}}" data-speed="0.7">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100 wow fadeIn" data-wow-delay="0.5s">
                    <h2 class="section-heading"> EMERGENCY ALERT SYSTEM  </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                        <li>
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 item-caption text-center">
                                    <div class="mb30">
                                        <h3>Level 0</h3>
                                    </div>
                                    <p class="lead">aha ni urwego buriwese muri tureme anyuramo, agahabwa amahugurwa kandi akishyura amafaranga
                                        angana na 24000frw</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 item-caption text-center">
                                    <div class="mb30">
                                        <h3>Level 1</h3>
                                    </div>
                                    <p class="lead">Ur'urwego ni igihe uba umaze gushyira abantu inyuma yawe 4, nukuvugako mukazi gakomeye uba umaze gukorera company
                                        ihita uguha promotion ingana na 25000frw</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 item-caption text-center">
                                    <div class="mb30">
                                        <h3>Level 2</h3>
                                    </div>
                                    <p class="lead">ur'urwego ni igihe uba umaze gushyira byibuze abantu inyuma yawe bangana na 16 bazannywe na babandi bane
                                        mugihe bamaze kwigishwa nabo bakigisha abandi buri umwe ashobora kwigisha ba 4, iyi level uyigezeho ahabwa promotion ingana
                                        na 60000frw, 1/2 ayashyikirizwa mu ntoki andi akayahabwamo produits zicuruzwa n'iyi company</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 item-caption text-center">
                                    <div class="mb30">
                                        <h3>Level 3</h3>
                                    </div>
                                    <p class="lead">uru ni urwego rwindashyikirwa muri uy'umushinga aho urugezemo inyuma haba habarirwa abigishywa 64 bazannywe na
                                        bariya 16 buri umwe yigisha ibikorwa by'umushinga abagera kuri 4, ugeze aha ahita ahabwa 200,000frw. Agahabwa igihembo nyamukuru
                                        cyateganyirijwe ababantu bakoze igikorwa cy'indashyikirwa kingana na 1,000,000frw , 1/2 cy'ayamafaranga agihabwa muntoki andi
                                        agahabwamo ibikoresho bicuruzwa n'iyi company.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="section-inner nopaddingbottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100 wow fadeIn" data-wow-delay="0.5s">
                    <h2 class="section-heading">EMERGENCY ALERT SYSTEM </h2>
                    <hr class="thin-hr">
                    <h4 class="section-subheading secondary-font">Kuremerana no kurema ubushobozi bw'urubyiruko </h4>
                    <h3 class="section-subheading secondary-font">Guteza imbere "Made in Rwanda"n'ubundi bucuruzis </h3>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="dark-wrapper">
    <div class="section-inner nopaddingbottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100 wow fadeIn" data-wow-delay="0.5s">
                    <h2 class="section-heading">MISSION AND VISION</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">Mission</h3>
                    <p class="lead">Turwanye ubukene nk'urubyiruko dutanga umusanzu wo kubaka igihugu cyacu.</p>
                    <h3 class="section-subheading secondary-font">Vision</h3>
                    <p class="lead">Kuba ikigo cy'intangarugero kw'isi mu bucuruzi ndetse no gutanga imirimo ku rubyiruko duteza imbere isi dutuyemo</p>

                </div>
            </div>
        </div>
    </div>
</section>
<footer class="white-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="list-inline social-links wow fadeIn" data-wow-delay="0.5s">
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>

            <hr class="thin-hr" />

            <div class="col-md-12 text-center wow fadeIn" data-wow-delay="0.5s">
                <span class="copyright">Copyright 2019. Designed by <b>SoftCode LMT</b></span>
            </div>
        </div>
    </div>
</footer>

</div>

<script src="{{ asset('fronted/js/jquery.js')}}"></script>
<script src="{{ asset('fronted/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('fronted/js/plugins.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{ asset('fronted/js/init.js')}}"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
    $(document).ready(function(){
        'use strict';
        jQuery('#headerwrap').backstretch([
            "{{ asset('fronted/img/bg/bg1.jpg')}}",
            "{{ asset('fronted/img/bg/bg2.jpg')}}",
            "{{ asset('fronted/img/bg/bg3.jpg')}}"
        ], {duration: 8000, fade: 500});
    });
</script>

</body>

</html>
