@extends("layouts._main")
@section("title","Produits et tarifs")

@section("content")
    <section class="section about-2 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-item pr-3 mb-5 mb-lg-0">
                        <span class="h6 text-color">Le Monte-Charge Easy-Lift™ </span>
                        <p class="mb-5">est la solution pour le transport de marchandise le long d'un escalier droit ou
                            courbe. Plus besoin de faire des allers-retours pénibles, une simple pression sur une des
                            télécommandes suffira à monter ou descendre vos marchandises les plus lourdes ou
                            encombrantes.
                            Easy-Lift™ est un système qui se fixe sur les marches existantes, il n’y a pas de gros
                            travaux n’y de modifications de la structure, seules quelques visses sont fixés sur les
                            marches c’est tout.
                            Easy-Lift™ est un produit breveté sous le numéro 14/57905 en date du 20/08/2014 et c’est la
                            société TMI AG qui en a la distribution exclusive.</p>
                        <span class="h6 text-color">Combien ça coûte ?</span>
                        <p class="mb-5">Pour une installation standard (jusqu’à5 mètres de rail) il faut compter 4’990€
                            HT, ce prix comprend l’étude de faisabilité, la livraison, la pose, l’explication & mise en
                            service avec une garantie de 2 ans.
                            Quelques options sont disponibles mais n’augmenterons pas le prix de manière conséquente.
                            Vous souhaitez un devis ?</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-item-img">
                        <img src="{{asset("images/1594289269_135.jpg")}}" alt="plates-formes"
                             class="img-fluid">
                        <br>
                        <br>
                        <a href="/contact-us" class="btn btn-main btn-round-full">Obtenir
                            documentation</a>
                        <br>
                        <br>
                        <a href="/devis-immediat" class="btn btn-main btn-round-full">Devis
                            immédiat</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
