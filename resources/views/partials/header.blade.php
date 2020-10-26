<header class="navigation" >
    <div class="header-top ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-md-4">
                    <div class="header-top-socials text-center text-lg-center text-md-center ">
                        <div class=" im-logo">
                            <a href="/"> <img src="{{asset("images/LOGOEasyLift.jpg")}}" alt="Easy Lift"
                                              style="max-width: 100%;"/></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                    <div class="header-top-info">
                        <a href="tel:+41 225 668 617">Appelez-nous: <span>+41 22 566 86 17</span></a>
                        <a href="mailto:{{setting('site.contact_email')}}"><i
                                class="fa fa-envelope mr-2"></i><span>{{setting('site.contact_email')}}</span></a>
                        @guest
                            <a style="color: white;border-radius: 20px;" href="/login" class="btn btn-small">
                                Connexion</a>
                        @endguest
                        @auth
                            @if(auth()->user()->role_id === 1)
                                <a href="/dashboard">Admin</a>
                            @endif
                            <a title="Déconnexion" class="btn btn-secondary btn-sm" style="padding: 10px 15px;" href="/logout"><span class="text-sm">{{auth()->user()->name}}</span>
                                <i class="fa fa-sign-out-alt"></i></a>

                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg  py-0"  id="navbar" >
        <div class="container-fluid">
            <div class="bg-logo"></div>
            <link type="image/png" href="{{asset("images/fav.png")}}">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="fa fa-bars menu-res"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav mr-auto ml-auto menu" id="mycontainer">
                    <li class="nav-item mt-2 spec">
                        <a class="nav-link" href="/"><span class="{{ (request()->is('/')) ? 'colorcurrent' : '' }}">Accueil</span>
                        </a></li>
                    <li class="nav-item mt-2 spec"><a class="nav-link" href="/produit-tarifs"><span
                                class="{{ (request()->is('produit-tarifs')) ? 'colorcurrent' : '' }}"> Produit et tarifs</span></a>
                    </li>
                    <li class="nav-item mt-2 spec"><a class="nav-link" href="/services"><span
                                class="{{ (request()->is('services')) ? 'colorcurrent' : '' }}">Services</span></a></li>
                    <li class="nav-item mt-2 spec"><a class="nav-link" href="/dernieres-realisations"><span
                                class="{{ (request()->is('dernieres-realisations')) ? 'colorcurrent' : '' }}"> réalisations</span></a>
                    </li>
                    <li class="nav-item mt-2 spec"><a class="nav-link" href="/about"><span
                                class="{{ (request()->is('about')) ? 'colorcurrent' : '' }}">Qui sommes-nous ?</span></a>
                    </li>
                    <li class="nav-item "><a class="nav-link" href="/contact-us"><span
                                class="{{ (request()->is('contact-us')) ? 'colorcurrent' : '' }} btn btn-solid-border btn-round-full">Documentation et tarifs</span></a>
                    </li>
                    <li class="nav-item "><a class="nav-link" href="/devis-immediat"><span
                                class="{{ (request()->is('devis-immediat')) ? 'colorcurrent' : '' }} btn btn-solid-border btn-round-full">Devis immédiat</span></a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
</header>
