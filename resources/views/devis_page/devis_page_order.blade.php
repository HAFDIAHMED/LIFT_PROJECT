@extends("layouts._main")
@section("title","Devis immédiat")
@section("hide","")

@push("style")
    <style>
        .border-image {
            border: 1px solid #d4cccc;
        }

        .input-group-text {
            border-radius: 0 !important;
            background-color: #f7f7f7 !important;
        }
    </style>
@endpush
@section("content")
    <section class="section mt-5 about-2 position-relative" style="padding : 5px !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div>
                    <div class="about-item pr-3 mb-5 mb-lg-0">
                        <span class="h5 text-color">Bienvenue dans votre interface, vous pouvez très facilement et rapidement obtenir votre devis. </span>
                        <p class="mb-5">Le processus se passe en trois étapes que vous pouvez suivre dans la barre de
                            progression en haut de page, nous avons besoin de 4 mesures clefs ainsi que 3 photos c’est
                            tout ! Une fois ces informations fournies vous obtiendrez votre devis. Vous pouvez quitter
                            votre interface à tout moment le temps que vous alliez effectuer ces mesures et prendre les
                            3 photos nécessaires et après, en indiquant votre adresse email dans le champ « Connexion »
                            en haut à droite du site vous reviendrez là ou vous nous aurez quitté et pourrez compléter
                            votre dossier. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-info section pt-0">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md ">01.</span>Mesures indispensables</h3>
                        <p>Ci-dessous les mesures clefs que nous devons avoir.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md">02.</span>Photos <span
                                style="visibility: hidden" class="ml-3">indispensables</span></h3>
                        <p>Afin de valider votre devis nous avons besoin de 3 photos, c’est très simple</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about-info-item mb-4 mb-lg-0">
                        <h3 class="mb-3"><span class="text-color mr-2 text-md">03.</span>Informations générales</h3>
                        <p>Ici, veuillez compléter les champs ci-dessous afin de vous connaitre et aussi vos
                            besoins.</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <br>
        <br>
        <br>
        <style>
            input, button {
                font-family: 'Hind', serif;
            }

            input[id=phone] {
                height: 100%;
            }
        </style>
        <div class="content">

            <div class="content__inner">
                <div class="container">


                    <h4 style="text-align:center;">Vous
                        devez maintenant renseigner quatre étapes, une fois qu’elles seront toutes renseignées, vous
                        obtiendrez votre devis immédiat, c’est à vous !</h4>
                    <br>
                </div>
                <div class="container ">

                    <div style="min-height: 650px;" class="multisteps-form">

                        <div class="row">
                            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active" type="button"
                                            title="User Info" disabled="true">Mesures indispensables
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button"
                                            title="Address" disabled="true">Photos
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button"
                                            title="Order Info" disabled="true">
                                        Informations générales
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button"
                                            title="Comments" disabled="true">
                                        commentaires
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-8 m-auto">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="multisteps-form__form"
                                      action="/devis" method="POST"
                                      id="signup-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active"
                                         data-animation="scaleIn">
                                        <span class="h5 text-color">Mesures indispensables</span><br>
                                        <span class="text-sm">Veuillez remplir les champs dans les dimensions données</span>
                                        <div class="multisteps-form__content">
                                            <div class="form-row mt-4">
                                                <div class="col-12 col-sm-6">
                                                    <div class="w-100 d-flex flex-column">
                                                        <div class="col-12">
                                                            <input value="{{old("mesure")}}"
                                                                   class="multisteps-form__input form-control"
                                                                   type="number"
                                                                   name="mesure" id="mesure"
                                                                   placeholder="Mesure de la course en cm" required
                                                                   data-group="btn-submit"
                                                                   />
                                                        </div>
                                                        <a href="#modal-1" rel="modal:open" class="col-12 d-relative">
                                                            <img class="img-fluid  border-image"
                                                                 src="{{asset("images/Mesure-de-la-course.png")}}"
                                                                 alt="Mesure de la course en cm"/>

                                                            <div>
                                                                <i class="fas fa-print"></i>
                                                                <i class="fas fa-search-plus"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                    <div class="d-flex w-100 flex-column">
                                                        <div class="col-12">
                                                            <input value="{{old("largeur")}}"
                                                                   class="multisteps-form__input form-control"
                                                                   type="number"
                                                                   name="largeur" id="last"
                                                                   placeholder="Largeur d'escalier en cm"
                                                                   required
                                                                   data-group="btn-submit"
                                                                   />
                                                        </div>
                                                        <a href="#modal-2" rel="modal:open" class="col-12 d-relative">
                                                            <img class="img-fluid border-image"
                                                                 src="{{asset("images/largeur-escalier.png")}}"
                                                                 alt="Largeur d'escalier en cm"/>
                                                            <div>
                                                                <i class="fas fa-print"></i>
                                                                <i class="fas fa-search-plus"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mt-4">
                                                <div class="col-12 col-sm-6">
                                                    <div class="d-flex w-100 flex-column">
                                                        <div class="col-12">
                                                            <input value="{{old("espace")}}"
                                                                   class="multisteps-form__input form-control"
                                                                   type="number"
                                                                   name="espace" id="espace_name"
                                                                   placeholder="Espace disponible sur le palier bas en cm"
                                                                   required
                                                                   data-group="btn-submit"
                                                                   />
                                                        </div>
                                                        <a href="#modal-3" rel="modal:open" class="col-12 d-relative">
                                                            <img class="img-fluid border-image"
                                                                 src="{{asset("images/espace-palier.png")}}"
                                                                 alt="Espace disponible sur le palier bas en cm"/>
                                                            <div>
                                                                <i class="fas fa-print"></i>
                                                                <i class="fas fa-search-plus"></i>
                                                            </div>
                                                        </a>
                                                    </div>


                                                </div>
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                    <div class="d-flex w-100 flex-column">
                                                        <div class="col-12">
                                                            <input value="{{old("hauteur")}}"
                                                                   class="multisteps-form__input form-control"
                                                                   type="number"
                                                                   name="hauteur" id="hauteur_name"
                                                                   placeholder="Hauteur sous plafond en cm " required
                                                                   data-group="btn-submit"
                                                                   />
                                                        </div>
                                                        <a href="#modal-4" rel="modal:open" class="col-12 d-relative">
                                                            <img class="img-fluid border-image"
                                                                 src="{{asset("images/hauteur-plafond.png")}}"
                                                                 alt="Hauteur sous plafond en cm"/>
                                                            <div>
                                                                <i class="fas fa-print"></i>
                                                                <i class="fas fa-search-plus"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button name="btn-submit" id="btn-submit"
                                                        class="btn btn-main ml-auto js-btn-next valider-1s-step"
                                                        type="button"
                                                        title="Next"  disabled="true">Valider
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                         data-animation="scaleIn">
                                        <p>Afin de valider votre devis nous avons besoin de 3 photos, c’est très
                                            simple</p>
                                        <div class="multisteps-form__content">
                                            <div class="form-row mt-5">
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">

                                                    <span class="h5 text-color">Photo du palier bas</span>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i id="p_palier_base_check" class="far fa-circle"></i>
                                                            </div>
                                                        </div>
                                                        <input class="form-control"
                                                               id="photo_palier_bas" name="p_palier_base" type="file"
                                                               accept="image/*" placeholder="Photo du palier bas"
                                                               required
                                                               data-group="btn-submit1"
                                                               />
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                    <span class="h5 text-color">Photo du palier haut</span>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i id="p_palier_haut_check" class="far fa-circle"></i>
                                                            </div>
                                                        </div>
                                                        <input class="multisteps-form__input form-control"
                                                               id="photo_palier_haut" name="p_palier_haut" type="file"
                                                               accept="image/*" placeholder="Photo du palier haut" data-group="btn-submit1"
                                                               required/>
                                                    </div>

                                                    <br>
                                                </div>
                                            </div>
                                            <div class="form-row mt-4 mt-md-5">
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                    <span class="h5 text-color">Photo de l'escalier</span>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i id="p_ensembre_check" class="far fa-circle"></i>
                                                            </div>
                                                        </div>
                                                        <input class="multisteps-form__input form-control"
                                                               id="photo_ensemble" name="p_ensembre" accept="image/*"
                                                               type="file" placeholder="Photo de l'ensembre" required
                                                               data-group="btn-submit1"
                                                               />
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="button-row d-flex mt-5">
                                                <button name="btn-submit1" id="btn-submit1"
                                                        class="btn btn-main ml-auto js-btn-next valider-2nd-step"
                                                        type="button"
                                                        title="Next" disabled="true">Valider
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                         data-animation="scaleIn">
                                        <h3 class="multisteps-form__title">Informations générales</h3>
                                        <div class="multisteps-form__content">
                                            <div class="form-row mt-4">
                                                <div class="col-12 col-sm-6">
                                                    <input value="{{old("societe")}}"
                                                           class="multisteps-form__input form-control" type="text"
                                                           name="societe" id="societe" placeholder="Nom société" data-group="btn-submit2"
                                                           required/>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                    <input value="{{old("name")}}"
                                                           class="multisteps-form__input form-control" type="text"
                                                           name="name" id="first_name"
                                                           placeholder="Votre nom et prenom" data-group="btn-submit2" required/>
                                                </div>
                                            </div>
                                            <div class="form-row mt-4">
                                                <div class="col-12 col-sm-6">
                                                    <input value="{{old("phone")}}"
                                                           class="multisteps-form__input form-control" type="number"
                                                           name="phone" id="phone" placeholder="Tél" required/></div>
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                    <input value="{{old("email")}}"
                                                           class="multisteps-form__input form-control" type="email"
                                                           name="email" id="email" placeholder="Email" data-group="btn-submit2" required/></div>
                                            </div>
                                            <div class="form-row mt-4">
                                                <div class="col-12 col-sm-6">
                                                    <input value="{{old("address")}}"
                                                           class="multisteps-form__input form-control" type="text"
                                                           name="address" id="address" placeholder="Address" data-group="btn-submit2" required/>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                    <input value="{{old("codepostal")}}"
                                                           class="multisteps-form__input form-control" type="text"
                                                           name="codepostal" id="codepostal" placeholder="Code postal"
                                                           required data-group="btn-submit2"/></div>
                                            </div>
                                            <div class="form-row mt-4">
                                                <div class="col-12 col-sm-6">
                                                    <input value="{{old("city")}}"
                                                           class="multisteps-form__input form-control" type="text"
                                                           name="city" id="ville" placeholder="Ville" required/></div>
                                                <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                                                    <input value="{{old("country")}}"
                                                           class="multisteps-form__input form-control" type="text"
                                                           name="country" id="country" placeholder="Pays" data-group="btn-submit2" required/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="button-row d-flex mt-4 col-12">
                                                    <button name="btn-submit2" id="btn-submit2"
                                                            class="btn btn-main ml-auto js-btn-next" type="button"
                                                            title="Next" disabled="true">Valider
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="multisteps-form__panel shadow p-4 rounded bg-white"
                                         data-animation="scaleIn">
                                        <h3 class="multisteps-form__title">Commentaires supplémentaires</h3>
                                        <div class="multisteps-form__content">
                                            <div class="form-row mt-4">
                                                <textarea name="description"
                                                data-group="submit-button-click"
                                                          required
                                                          class="multisteps-form__textarea form-control"
                                                          placeholder="Décrivez brièvement votre projet "
                                                          required>{{old("description")}}</textarea>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button id="submit-button-click" class="btn btn-success ml-auto"
                                                        type="button" title="Send" disabled="true" >Envoyer
                                                </button>
                                            </div>
                                            <x-messages-component/>

                                        </div>
                                    </div>
                                </form>
                                <div id="error-message"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection

@push("bottom")
    <div id="modal-1" class="modal">
        <div class="w-100 d-flex flex-column justify-content-center align-items-center h-100 modal-zoomer">
            <img class="img-fluid border-image"
                 src="{{asset("images/Mesure-de-la-course.png")}}"
                 alt="Largeur d'escalier en cm"/>
        </div>
    </div>
    <div id="modal-2" class="modal">
        <div class="w-100 d-flex flex-column justify-content-center align-items-center h-100 modal-zoomer">
            <img class="img-fluid border-image"
                 src="{{asset("images/largeur-escalier.png")}}"
                 alt="Largeur d'escalier en cm"/>
        </div>
    </div>

    <div id="modal-3" class="modal">
        <div class="w-100 d-flex flex-column justify-content-center align-items-center h-100 modal-zoomer">
            <img class="img-fluid border-image"
                 src="{{asset("images/espace-palier.png")}}"
                 alt="Largeur d'escalier en cm"/>
        </div>
    </div>

    <div id="modal-4" class="modal">
        <div class="w-100 d-flex flex-column justify-content-center align-items-center h-100 modal-zoomer">
            <img class="img-fluid border-image"
                 src="{{asset("images/hauteur-plafond.png")}}"
                 alt="Largeur d'escalier en cm"/>
        </div>
    </div>
@endpush
@push("style")
    <style>
        .d-relative{
            position: relative;
        }
        .d-relative > div:nth-child(2){
            position: absolute;
            right: 32px;
            bottom: 6px;
        }
        .d-relative > div:nth-child(2) > i{
            font-size: 12px;
        }
        .btn-zoomer {
            padding: 3px 9px;
        }
        .btn-zoomer:active, .btn-zoomer:focus{
            outline: none !important;
            border: none;
        }
    </style>
@endpush
@push("script")
    <script>
        $(function () {
            for (const el of document.querySelectorAll(".modal-zoomer")) {
                const buttonPlus = document.createElement("button");
                const buttonMinus = document.createElement("button");
                const buttonPdf = document.createElement("button");

                const buttonContainer = document.createElement("div");
                const img = el.querySelector("img")
                // img.style = "width:100%"
                buttonPlus.className = "btn btn-zoomer"
                buttonPlus.innerHTML = `<i class="fas fa-search-plus"></i>`

                buttonMinus.className = "btn btn-zoomer"
                buttonMinus.innerHTML = `<i class="fas fa-search-minus"></i>`

                buttonPdf.className = "btn btn-zoomer"
                buttonPdf.innerHTML = `<i class="fas fa-print"></i>`

                buttonContainer.className = "btn-group"
                buttonContainer.appendChild(buttonPlus)
                buttonContainer.appendChild(buttonMinus)
                buttonContainer.appendChild(buttonPdf)
                el.appendChild(buttonContainer)

                buttonMinus.setAttribute("disabled","true")

                buttonPlus.onclick = (ev)=>{
                    img.style = "width:100%"

                    buttonPlus.setAttribute("disabled","true")
                    buttonMinus.removeAttribute("disabled")
                }
                buttonMinus.onclick = (ev)=>{
                    img.style = "width:50%"

                    buttonMinus.setAttribute("disabled","true")
                    buttonPlus.removeAttribute("disabled")
                }

                buttonPdf.onclick = (ev)=>{
                    printJS(img.src,"image")
                }
            }
        })
    </script>
@endpush

@push("script")
    <script defer src="{{asset("js/print.min.js")}}" crossorigin="anonymous"></script>

    <script defer>
        $(function () {
            const INPUTS = [
                "p_ensembre",
                "p_palier_base",
                "p_palier_haut"
            ]
            INPUTS.forEach(el => {
                document.querySelector(`input[name=${el}]`).addEventListener("change", (e) => {
                    const files = e.target.files
                    if (files && files.length > 0) {
                        document.querySelector(`#${el}_check`).className = "fas fa-check-circle"
                    } else {
                        document.querySelector(`#${el}_check`).className = "far fa-circle"
                    }
                })
            })
        })
        // const FIELDS = [
        //     //first step
        //     [
        //         "mesure",
        //         "largeur",
        //         "espace",
        //         "hauteur"
        //     ]
        // ]
        // //First step
        // const firstStepNext = document.querySelector(".valider-1s-step")
        // const secondStepNext = document.querySelector(".valider-2nd-step")
        // FIELDS[0].forEach(el => {
        //     document.querySelector(`input[name=${el}]`).addEventListener("change", (e) => {
        //         const value = document.querySelector(`input[name=${el}]`).value
        //         if(value && value.length>0)
        //         {
        //             firstStepNext.
        //         }
        //     })
        // })


    </script>
@endpush

@push("script")
    {{--    <script src="{{asset("js/framework.combined-min.js")}}"></script>--}}
    <script defer src="{{asset("js/combined.js")}}"></script>
    <script>
        $(function () {

            $("#submit-button-click").on("click", (ev) => {
                // ev.preventDefault();
                const list = document.querySelector("#signup-form").querySelectorAll("input, textarea")
                let missing = false
                for (let el of list) {
                    if (el.getAttribute("required") !== undefined && (!el.value || el.value.length <= 0)) {
                        missing = true
                        $(el).addClass("error-input")
                    }
                }
                if (missing) {
                    $("#error-message").html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      Tous les champs sont obligatoires
                    </div>`)
                } else {
                    $("#signup-form").submit()
                }
            })
        })
    </script>
@endpush
@push("style")
    <link rel="stylesheet" property="stylesheet" href="{{asset("css/framework.extras-min.css")}}">

    <style>
        .error-input {
            border-color: #F44336;
        }
    </style>
@endpush
