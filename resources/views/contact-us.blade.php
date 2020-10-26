@extends("layouts._main")
@section("title","Documentation et Tarifs")

@push("style")
    <style>
        input, button {
            font-family: 'Hind', serif;
        }

        .contact-form-edited {
            display: flex;
            align-items: center;
            flex-direction: row-reverse;
            justify-content: flex-end;
        }

        .contact-form-edited > input {
            width: 24px;
            position: relative;
            top: -1px;
        }
    </style>
@endpush

@section("content")
    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div id="scf-contactForm">
                        <x-messages-component/>
                        <div id="scf-form-contactForm">
                            <form method="POST" action="/contact-us" accept-charset="UTF-8"
                                  id="scf-form-id-contactForm">
                                @csrf
                                <div class="form-group"><label class="control-label  " for="contactForm-first_name"
                                                               style="display: none;">Prénom</label><input
                                        id="contactForm-first_name" name="first_name" class="form-control"
                                        placeholder="Prénom" required type="text"></div>
                                <div class="form-group"><label class="control-label  " for="contactForm-last_name"
                                                               style="display: none;">Nom</label><input
                                        id="contactForm-last_name" name="last_name" class="form-control"
                                        placeholder="Nom" required type="text"></div>
                                <div class="form-group"><label class="control-label  " for="contactForm-entreprise"
                                                               style="display: none;">Lieu du chantier</label><input
                                        id="contactForm-entreprise" name="location" class="form-control"
                                        placeholder="Lieu du chantier" required type="text"></div>
                                <div class="form-group"><label class="control-label  required"
                                                               for="contactForm-telephone" style="display: none;">Téléphone
                                        ' Obligatoire ' </label><input id="phone" name="phone"
                                                                       class="form-control"
                                                                       placeholder="Téléphone ' Obligatoire ' "
                                                                       type="text" required=""></div>
                                <div class="form-group"><label class="control-label  " for="email"
                                                               style="display: none;">Email</label><input
                                        id="contactForm-email" required name="email" class="form-control"
                                        placeholder="Email"
                                        type="email"></div>
                                <div class="">
                                    <div class="checkbox"><label class="contact-form-edited "><input
                                                id="contactForm-sendemail" name="sendemail" checked disabled
                                                type="checkbox"
                                                value="1">Je souhaite recevoir la documentation par email </label></div>
                                </div>
                                <div id="submit-wrapper-contactForm" class="form-group">
                                    <button type="submit" data-attach-loading class="oc-loader btn btn-main">Envoyer le
                                        message
                                    </button>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                        <span class="text-muted">Nous sommes des professionnels</span>
                        <h3 class="mb-5 mt-2">Si vous avez des questions d’ordre techniques ou commerciales vous pouvez
                            nous contacter</h3>
                        <ul class="address-block list-unstyled">
                            <li>
                                <i class="ti-direction mr-3"></i>TMI AG Sankt-Alban Anlage 46 CH-4057 Basel
                            </li>
                            <li>
                                <i class="ti-email mr-3"></i>Email: <a href="mailto:{{setting("site.contact_email")}}"
                                                                       class="__cf_email__">{{setting("site.contact_email")}}</a>
                            </li>
                            <li>
                                <i class="ti-mobile mr-3"></i>Tél:+41 22 566 86 17
                            </li>
                        </ul>
                        <ul class="social-icons list-inline mt-5">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.linkedind.com"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@push("style")
    <link rel="stylesheet" property="stylesheet" href="{{asset("css/framework.extras-min.css")}}">
@endpush

@push("script")
    {{--    <script data-cfasync="false" src="{{asset("js/email-decode.min.js")}}"></script>--}}
    {{--    <script defer src="{{asset("js/framework-min.js")}}"></script>--}}
    {{--    <script defer src="{{asset("js/framework.combined-min.js")}}"></script>--}}
@endpush
