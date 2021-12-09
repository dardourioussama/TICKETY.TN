<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Concerts, Festivals, Expositions, Sport , ...▻ Réservez vos places sur Tickety ! Le n°1 du E-ticket en Tunisie - Paiement 100% sécurisé."/>
        <meta name="author" content="CHEDLI & OUSSAMA" />
        <title>Tickety.Tn – N°1 du E-Ticket en Tunisie.</title>
        <link rel="icon" href="{{asset("images/ticket.ico")}}" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >
        <style>
            h2{
                font-size: 2.25rem;
                margin-top: 5px;
                margin-bottom: 5px;
                padding: 20px 20px;
                line-height: 1.5;
                color: #2e3e40;
            }
            .imgcover{
                height: 720px;
            }
            nav{
                text-align: center;
                box-shadow: 0 2px 5px rgb(0 0 0 / 26%);
            }
            #logo{
                display: block;
                height: 54px;
                padding-top: 3px;
                margin-right: 15px;
            }
            .bg-carousel{
                height: 100%;
                padding: 60px 50px;
                color: #ffffff;
              /*  background: rgba(28, 171, 197, 0.85);*/
            }
            .carousel-detail{
                margin-top: 50px;
                color:white;
                padding: 0;
                font-size: 24px;
                text-transform: uppercase;
            }
            section{
                padding: 6rem 0;
            }
            .btn-reserver {
                color:white;
                font-size: 30px;
                background-image: none;
                background-color: transparent;
                border-color: whitesmoke;
                border-radius: 30px;
            }
            .btn-reserver:hover{
                color: white;
                background-color: #f9276c;
            }
            .btn-reserver:active{
                color:white;
            }
            .btn-reserver:visited{
                color:#f9276c;
            }
            .copyright {
                background-color: #000000;
                font-weight: bold;
            }
            ul li a {
                padding: 0 10px;
                border: none;
                color: black;
                background: transparent;
                font-size: 13px;
                font-weight: bold;
                line-height: 40px;
                text-transform: uppercase;
            }

            #imgs {
                display: block;
                padding: 0;

            }

            #imgs li {
                padding-right: 10px;
                display: inline-block;
                *display:inline;
            }

            #imgs img {
                width: 142.5px;

            }

            footer{
                padding-top: 5rem;
                padding-bottom: 5rem;
                background-color: #2c3e50;
                color: #fff;
            }
        </style>
    </head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="{{asset('images/logo.png')}}" id="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#Accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sponsor">sponsor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contact">Contact</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<header id="Accueil">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 imgcover"   src="{{asset("images/08/WhatsApp-Image-2021-08-06-at-10.20.09.jpg")}}"  alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="bloc-carousel">
                            <h3>Location VTT et Trottinette électrique</h3>
                            <a class="btn btn-reserver">Réserver</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 imgcover"  src="{{asset("images/11/246501509_603247827688891_782137164641954208_n-1024x576.jpg")}}" alt="Second slide">
                    <div class="carousel-caption col-3 d-none d-md-block bg-carousel" >
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 imgcover"  src="{{asset("images/11/IMG_7934-1024x670.jpg")}}"  alt="Third slide">
                    <div class="col-md-5 col-lg-4 carousel-caption d-none d-md-block bg-carousel">

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
</header>


    <div class="row">
        <div class="container">

        </div>

        <div style="height: 1900px">

        </div>
</div>
<section class="text-center" id="sponsor">
    <br>
    <div class="container">
        <h2 class="text-center text-uppercase" >ILS NOUS ONT FAIT CONFIANCE</h2>
        <div class="" >
            <ul id="imgs">
                <li><img  src="{{asset("images/BWP.png")}}" alt="BWP" /></li>
                <li><img  src="{{asset("images/jazz.png")}}" alt="jazz" /></li>
                <li><img  src="{{asset("images/logo-tabarka-jazz.png")}}" alt="jazz" /></li>
                <li><img  src="{{asset("images/Sans-titre-2.png")}}" alt="jazz" /></li>
                <li><img  src="{{asset("images/Sans-titre-3.png")}}" alt="jazz" /></li>
                <li><img  src="{{asset("images/Sans-titre-6.png")}}" alt="jazz" /></li>
                <li><img  src="{{asset("images/Sans-titre-8.png")}}" alt="jazz" /></li>
                <li><img  src="{{asset("images/Sans-titre-11.png")}}" alt="jazz" /></li>
            </ul>
        </div>
    </div>
    <br>
</section>
<section class="bg-white text-center" id="map">
    <br>
    <div class="container">
        <h2 class="text-center text-uppercase" >Map Location</h2>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3220.5123201206875!2d8.708336215272512!3d36.17842028008135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea46e94b9ed2cde8!2sInstitut%20Sup%C3%A9rieur%20de%20l&#39;Informatique%20du%20Kef!5e0!3m2!1sfr!2stn!4v1638710017160!5m2!1sfr!2stn" width="100%" height="520" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <br>
</section>
<footer class="text-center" id="Contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Contact</h4>
                <p class="mb-0">
                    <span >Nom & Prenom </span> : oussama dardouri <br />
                    <span >E-Mail</span> : oussamadardouri2@gmail.com <br />
                    <span >Phone</span> : + 216 56 203 642 <br />
                </p>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light mx-1" href="https://www.linkedin.com/in/oussamadardouri" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light mx-1" href="https://github.com/dardourioussama" target="_blank"><i class="fab fa-fw fa-github"></i></a> -
                <a class="btn btn-outline-light mx-1" href="https://github.com/JenhaniChedli" target="_blank"><i class="fab fa-fw fa-github"></i></a>
                <a class="btn btn-outline-light mx-1" href="https://www.linkedin.com/in/jenhanichedli" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Contact</h4>
                <p class="mb-0">
                    <span >Nom & Prenom </span> : chedli jenhani <br />
                    <span >E-Mail</span> : chedlijenhani@gmail.com <br />
                    <span >Phone</span> : + 216 20 410 944 <br />

                </p>
            </div>
        </div>
    </div>
</footer>
  <div class="copyright py-4 text-center text-white">
      <div class="container"><small>Copyright © CHEDLI & OUSSAMA 2021</small></div>
  </div>
</body>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstraponline.min.js')}}"></script>
    <script type="text/javascript" src="{{asset("lib/ImageScroll.js")}}"></script>
    <script type="text/javascript">

        $('#imgs').imageScroll({
            orientation:"left",
            speed:600,
            interval:1000,
            hoverPause:true,
            callback:function(){
                var ordinal = $(this).find("img").first().attr("src");
                $(this).next("span").text("CallbackDisplay: hidden "+ordinal+"!");
            }
        });

    </script>
</html>
