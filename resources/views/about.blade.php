@extends("layouts._main")
@section("title","Qui sommes-nous")
@section("content")
    <section class="section about-2 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-item pr-3 mb-5 mb-lg-0">
                        <h3 class="mt-3 mb-4 position-relative content-title">La société TMI AG </h3>
                        <p class="mb-5 ">est une société familiale fondée en 1984 par Thierry Hermann spécialisé dans les solutions d’accessibilité à installer sur des escaliers existants. Notre secteur d’activité est principalement le transport de personnes âgées et/ou handicapées via une gamme complète de monte-escaliers (www.suisse-monte-escaliers.ch) et depuis 2019 nous avons ouvert une division Monte-charges utilisant la même technologie que nos monte-escaliers.</p>
                    </div>
                    <div class="about-item pr-3 mb-5 mb-lg-0">
                        <span class="h6 text-color">Siège Social</span>
                        <ul class="address-block list-unstyled">
                            <li>
                                <i class="ti-direction mr-3"></i>TMI AG Sankt-Alban Anlage 46 CH-4057 Basel
                            </li>
                            <li>
                                <i class="ti-email mr-3"></i>Email: <a href="mailto:{{setting("site.contact_email")}}" class="__cf_email__">{{setting("site.contact_email")}}</a>
                            </li>
                            <li>
                                <i class="ti-mobile mr-3"></i>Tél:+41 612 702 121
                            </li>
                        </ul>
                        <span class="h6 text-color">Agence de Genève</span>
                        <ul class="address-block list-unstyled">
                            <li>
                                <i class="ti-direction mr-3"></i>TMI AG 41A, route des jeunes CP 215CH-1233 Bernex
                            </li>
                            <li>
                                <i class="ti-email mr-3"></i>Email: <a href="mailto:{{setting("site.contact_email")}}" class="__cf_email__">{{setting("site.contact_email")}}</a>
                            </li>
                            <li>
                                <i class="ti-mobile mr-3"></i>Tél:+41 225 668 617
                            </li>
                        </ul>
                        <a href="/devis-immediat" class="btn btn-main btn-round-full">Devis immédiat</a>
                        <a href="/contact-us" class="btn btn-main btn-round-full">Obtenir documentation</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div style="margin-top: 26px;" class="about-item-img">
                        <img src="{{asset("images/Thierry%20Hermann.jpg")}}" alt="Thierry Hermann" class="img-fluid">
                    </div>
                    <span class="h6 text-color">Thierry Hermann,</span>
                    <p class="mb-4">désormais à la retraite, un dimanche soir avec sa petite fille Zoé.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-item-img">
                        <img src="{{asset("images/Romain%20Hermann.jpg")}}" alt="Romain Hermann" class="img-fluid">
                    </div>
                    <span class="h6 text-color">Romain Hermann,</span>
                    <p class="mb-4">Technicien dans l’âme, validant l’installation d’une plateforme à Genève.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
