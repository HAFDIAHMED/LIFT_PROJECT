@extends("layouts._main")
@section("title","Accueil")

@push("style")
    <style>
        body{
            overflow-x: hidden;
        }
        @media only screen and (max-width: 800px){
            h1{
                font-size: 24px;
            }
        }
        @media only screen and (max-width: 600px){
            h1{
                font-size: 22px;
            }
        }
    </style>
@endpush

@section("content")
    <div class="slick-slider-7">
        <div class="slide">
            <div class="slide-image"
                 style="background-image: url( '/images/Sans%20titre.png' );">
                <div class="slide-content">
                    <h1>Vous devez porter des marchandises lourdes et encombrantes ? EasyLift™ est fait pour vous, voyez
                        plutôt….</h1>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-image"
                 style="background-image: url( '/images/EasyLift%2004.jpg' );">
            </div>
        </div>
        <div class="slide">
            <div class="slide-image"
                 style="background-image: url( '/images/EasyLift%200555.jpg' );">
            </div>
        </div>
        <div class="slide">
            <div class="slide-image"
                 style="background-image: url( '/images/Sans%20titre.png' );">
                <div class="slide-content">
                    <h1>Notre système s’installe facilement sur les marches existantes, aucun gros travaux, juste
                        quelques visses sur vos marches, installations en moins de 4 heures…. </h1>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-image"
                 style="background-image: url( '/images/Sans%20titre.png' );">
                <div class="slide-content">
                    <h1>EasyLift™ peut transporter jusqu’à 160KG et s’adapte à toutes marchandises, vous pouvez choisir
                        le revêtement du plateau en fonction de vos exigences….</h1>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-image"
                 style="background-image: url( '/images/Photo%2013.jpg' );">
            </div>
        </div>
        <div class="slide">
            <div class="slide-image"
                 style="background-image: url( '/images/IMG_5210.jpg' );">
            </div>
        </div>
        <div class="slide">
            <div class="slide-image"
                 style="background-image: url( '/images/Sans%20titre.png' );">
                <div class="slide-content">
                    <h1>Demandez votre devis instantané via l’onglet « Devis immédiat» ou bien contactez-nous pour
                        obtenir plus d’informations ! </h1>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{asset("css/slick.css")}}">
    <link rel="stylesheet" href="{{asset("css/slick-theme.css")}}">
    <style>
        .slick-slider-7 .slick-slide > div > div {
            float: left !important;
        }

        .slick-slider-7 .slick-slide > div > a {
            float: left !important;
        }

        .slick-slider-7 .slick-slide .slide-image {
            min-height: 500px;
            position: relative;
            background-size: cover;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .slick-slider-7 .slick-slide .slide-image .slide-content {
            color: #ffffff;
            text-align: center;
        }
    </style>
    <script data-cfasync="false" src="{{asset("js/email-decode.min.js")}}"></script>
    <script src="{{asset("js/jquery-3.1.1.min.js")}}"></script>
    <script src="{{asset("js/slick.min.js")}}"></script>
    <script>
        $(document).ready(function () {
            var args = {
                accessibility: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                centerMode: false,
                centerPadding: '50px',
                cssEase: 'ease',
                dots: true,
                draggable: true,
                fade: false,
                focusOnSelect: false,
                easing: 'linear',
                edgeFriction: 0.15,
                infinite: true,
                initialSlide: 0,
                lazyLoad: 'ondemand',
                mobileFirst: false,
                pauseOnFocus: true,
                pauseOnHover: true,
                pauseOnDotsHover: true,
                rows: 1,
                slidesPerRow: 2,
                slidesToShow: 2,
                slidesToScroll: 2,
                speed: 300,
                swipe: true,
                touchMove: true,
                touchThreshold: 5,
                useCSS: true,
                useTransform: true,
                vertical: false,
                verticalSwiping: false,
                rtl: false,
                waitForAnimate: true,
                zIndex: 1000,
                responsive: []
            };
            $('.slick-slider-7').slick(args);

            // $(window).resize(function() {
            // 	$('.slick-slider-7').slick('unslick');
            // 	$('.slick-slider-7').slick(args);
            // });
        });

    </script>
    <section class="section blog-wrap bg-gray">
        <div class="containers">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <a href="/produit-tarifs"> <img
                                src="/images/PS.png" alt="" class="img-fluid rounded"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <a href="/devis-immediat"> <img src="/images/DVS.png" alt=""
                                                        class="img-fluid rounded"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <a href="/services"><img src="/images/SR.png" alt=""
                                                 class="img-fluid rounded"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <a href="/dernieres-realisations"> <img src="/images/REAL.png"
                                                                alt="" class="img-fluid rounded"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <a href="/about"> <img src="/images/QS.png" alt=""
                                               class="img-fluid rounded"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5">
                    <div class="blog-item">
                        <a href="/contact-us"><img src="/images/CT.png" alt=""
                                                   class="img-fluid rounded"></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 text-center">
                    <nav class="navigation pagination d-inline-block">
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="section cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cta-item  bg-white p-5 rounded">
                        <span class="h6 text-color">Le Monte-Charge Easy-Lift™ est la solution pour le transport de marchandise le long d'un escalier droit ou courbe. Plus besoin de faire des allers-retours pénibles, une simple pression sur une des télécommandes suffira à monter ou descendre vos marchandises les plus lourdes ou encombrantes.</span>
                        <p class="lead mb-4">Pour un soutien immédiat:</p>
                        <h3><i class="ti-mobile mr-3 text-color"></i>+41 22 566 86 17</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-70 position-relative">
        <div class="container">
            <div class="cta-block-2 bg-gray p-5 rounded border-1">
                <div class="row justify-content-center align-items-center ">
                    <div class="col-lg-7">
                        <span class="text-color">Nous sommes des professionnels</span>
                        <h2 class="mt-2 mb-4 mb-lg-0">Si vous avez des questions d’ordre techniques ou commerciales vous
                            pouvez nous contacter</h2>
                    </div>
                    <div class="col-lg-4">
                        <a class="btn btn-main btn-round-full float-lg-right"
                           href="/contact-us">Contactez nous</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
