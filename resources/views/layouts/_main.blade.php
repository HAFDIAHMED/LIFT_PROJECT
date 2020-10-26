<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="title" content="Contact Us - Easy Lift">
    <meta name="author" content="">
    <meta name="robots" content="index, follow">
    <meta name="generator" content="Easy Lift">

    <title>{{config("app.name")}} | @yield("title")</title>

    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/style2.css")}}">
    <link rel="icon" type="image/png" href="{{asset("images/fav.png")}}">
    <link rel="stylesheet" href="{{asset("css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset("css/edited.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>

    @stack("style")
</head>
<body>
    {{-- message d'acceuil  --}}
 
    <div id="my-welcome-message" class="col-md-12" >
        <div class="close-popup ">
            <a href="" id="close-p">
        <i class="fas fa-times" ></i></a>
    </div>
        <div class="aide  alert"  >
            <h4 >EasyLift™ est la pour vous aider !</h4>
        </div>
        <img style="margin-top: -20px"  src="{{url('/images/services.png')}}" class="img-fluid" alt="Image"/> <br>
        <div class="row">
            <div class="col-md-6">
                
        <h5>Besoin d'aide ?</h5>
            </div>
            <div class="col-md-6">
        <p>Un specialise vous conseille</p></div>
        <div class="col-md-12 text-center"> 
        <h3>Tel: +41 61 270 21 21</h3>
        </div>
        </div>
        <div class="row">
            <div class="col md-6">
                
        <a href="/contact-us?utm_source=easylift&utm_medium=popup&utm_compaign=contact" class="button"> Tarifs et documentations</a> 
            </div>
            <div class="col md-6" class="non-merci">
                 
        {{-- <button    class="button">Non Merci</button> --}}
        <a href="#" class="button" id="non-merci"> Non Merci</a> 
           
            </div>
        </div>
      </div> 
    
      {{-- end message d'acceuil --}}

      {{--  start annexe de site --}}
      {{-- for the mobile version --}}
      <div class="mobile-popup">
          <button id="btn-reviews">Reviews</button>
      </div>
      {{-- for the mobile version --}}
      <div class="annexe">
          <div class="close-annexe">
              <a href="#" id="close-btn"><i class="far fa-times-circle"></i></a>
            
          </div>
        <img style="margin-left: 100px" class="mr-auto"  src="{{url('/images/teleoperatrice.png')}}"  alt="Image"/> <br>
        <div class="inneronglet">
            <h5><a href="/contact-us">Contactez-nous</a></h5>
            <div class="row text-center">
             <div class="col-md-6 ml-auto mr-auto ">
                 <a href="tel:+41 61 270 21 21" class="mr-3">
                 <i class="fas fa-phone-volume"></i>
             </a>
                 <a href="mailto:info@easy-lift-go.com">
                     <i class="fas fa-envelope"></i>
                 </a>
                 </div>
            </div>
        </div>
        <div class="inneronglet"  >
            <div class="row">
                <div class="col-md-4 mt-4">
                    <i class="fas fa-thumbs-up" style="color: white;font-size:40px"></i>
                </div>
                <div class="col-md-8 ">
                    <div class="row ">
                        <div class="col-md-12 ">
                        
                    <h2 style="color: white">4<span style="font-size: 22px">/5</span></h2>
                </div> 
                <div class="col-md-12 ">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                         
                    </div>
                    <div class="col-md-12">
                        <p>basé sue 15 avis</p>
                    </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
        
      </div>
      {{--  end annexe de site --}}
@include("partials.header")
<div class="main-wrapper">
    @if(!Request::is("/"))
        <div class="container mt-4">
            <h3 id="page-title-10" class="text-color text-center">@yield("title")</h3>
        </div>
    @endif
    <div class="container">
        @yield("content")
    </div>
</div>
@include("partials.footer")

@stack("bottom")

<script src="{{asset("js/script.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script> 

@stack("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
{{-- first visit popup --}}
<script>
    

    // old script
    $(document).ready(function() {
        if (!localStorage.getItem("modal")) {
          setTimeout(() => {
            $("#my-welcome-message").css("display", "block")
            localStorage.setItem("modal", true)
          }, 30000)
        } else {
          console.log("kayn storage")
        }
      })
  </script>
<!-- Global site tag (gtag.js) - Google Analytics -->
{{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178269579-1"></script> --}}
{{-- <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-178269579-1');
</script> --}}
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W55M8BZ');</script>
    <!-- End Google Tag Manager -->
</body>
</html>
