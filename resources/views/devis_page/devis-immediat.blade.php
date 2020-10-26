@extends("layouts._main")
@section("title","Devis immédiat")

@section("content")
    <section class="section about-2 position-relative" style="margin-top:20px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-item pr-3 mb-5 mb-lg-0">
                        <span class="h6 text-color">Bonjour, bienvenue dans votre interface qui vous permet d’obtenir votre devis directement via email. </span>
                        <p class="mb-5">Pour ce faire nous avons besoin de certaines informations techniques, très
                            simples à calculer, ainsi que 3 photos. Afin que vous puissiez renseigner votre dossier,
                            très rapide, vous devez créer un compte, ce qui vous permettra de conserver toutes vos
                            informations et vous laissera le temps d’aller calculer les mesures nécessaires et de
                            prendre les photos demandées. Pour créer le compte seule votre adresse email suffit, c’est
                            cette adresse email qui vous servira d’identifiant, pas de mot de passe requis. Vous pourrez
                            ainsi revenir compléter votre dossier à tout moment pendant 7 jours. Une fois que nous
                            aurons réceptionné toutes les informations requises, vous obtiendrez votre devis par email
                            et il sera disponible dans votre interface client pendant 60 jours.</p>
                        <a href="/login" class="btn btn-main btn-round-full">Commencer</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-item-img">
                        <img src="{{asset("images/1594289269_135.jpg")}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
