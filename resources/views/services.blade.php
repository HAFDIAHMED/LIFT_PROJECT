@extends("layouts._main")

@section("title","Services")

@section("content")
    <section class="section about-2 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-item pr-3 mb-5 mb-lg-0">
                        <p class="mb-5 ">Nous mettons tout en œuvre pour pouvoir vous fournir votre monte-charge Easy-Lift™ le plus facilement possible. Nous avons tout mis en œuvre pour que le processus, allant de la prise de contact à l’installation soit le plus simple possible. Nous utilisons au maximum Internet et pouvons ainsi optimiser le processus de commande. Bien évidemment nos équipes sont disponibles en cas de besoin.</p>
                        <p>Ci-dessous un résumé de nos services :</p>
                    </div>
                    <div class="about-item pr-3 mb-5 mb-lg-0">
                        <a href="/contact-us"class="h6 text-color">Demande de documentations </a>
                        <ul class="address-block list-unstyled">
                            <li>
                                Si vous souhaitez une documentation commerciale et technique, vous pouvez l’obtenir immédiatement en allant dans l’onglet <a href="/contact-us" class="text-color">Contact</a>
                            </li>
                        </ul>
                        <a href="/devis-immediat" class="h6 text-color">Demande de devis</a>
                        <ul class="address-block list-unstyled">
                            <li>
                                Si vous souhaitez un devis précis, vous pouvez l’obtenir en allant dans l’onglet <a href="/devis-immediat" class="text-color">Devis immédiat</a> , ce service vous permet d’obtenir un devis par vous-même de manière immédiate, il vous suffit de renseigner 4 informations très faciles à obtenir et de télécharger 3 photos. Avec ce service, pas besoin de discuter, d’attendre c’est direct.
                            </li>
                        </ul>
                        <span class="h6 text-color">Demande de prix </span>
                        <ul class="address-block list-unstyled">
                            <li>
                                Vous pouvez consulter nos prix dans l’onglet <a href="/produit-tarifs"></a> Produit & Tarifs, nos tarifs sont simples et sans vices cachés.
                            </li>
                        </ul>
                        <span class="h6 text-color">Installation de votre monte-charge </span>
                        <ul class="address-block list-unstyled">
                            <li>
                                Nos équipes sont locales et n’attendent qu’à venir vous installer votre appareil, il faut juste commander !!
                            </li>
                        </ul>
                        <span class="h6 text-color">Service après-vente </span>
                        <ul class="address-block list-unstyled">
                            <li>
                                Nous assurons vos dépannages et révisions via nos équipes locales, rapides et efficaces
                            </li>
                        </ul>
                        <span class="h6 text-color">Autres demandes </span>
                        <ul class="address-block list-unstyled">
                            <li>
                                Pour toutes autres demandes notre service client est à votre écoute sur l’email <a href="mailto:{{setting("site.contact_email")}}"><span class="__cf_email__" style="color: #fb9708">{{setting("site.contact_email")}}</span> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-item-img">
                        <section class="blog-wrap bg-black">
                            <div class="containers">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 mb-5">
                                        <div class="blog-item">
                                            <a href="/produit-tarifs"> <img src="{{asset("images/Photo023.png")}}" alt="" class="img-fluid rounded"></a>
                                            <p>Nous vous proposons d’établir vous-même votre devis, c’est très simple et rapide</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-5">
                                        <div class="blog-item">
                                            <a href="/devis-immediat"> <img src="{{asset("images/Photo020.png")}}" alt="" class="img-fluid rounded"></a>
                                            <p>Nous livrons votre appareil directement sur le chantier depuis notre usine</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-5">
                                        <div class="blog-item">
                                            <a href=""><img src="{{asset("images/Photo021.png")}}" alt="" class="img-fluid rounded"></a>
                                            <p>Ou que vous soyez en Europe, ce sera une équipe locale qui interviendra, SAV fiable et rapide</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-5">
                                        <div class="blog-item">
                                            <a href=""><img src="{{asset("images/Photo022.png")}}" alt="" class="img-fluid rounded"></a>
                                            <p>Tous nos appareils sont garantis 2ans pièces et main d’œuvre</p>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
