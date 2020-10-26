@extends("layouts._main")
@section("title","S'identifier")

@section("content")
    <section class="section intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Se connecter</h3>
                    <form method="post" action="/login" accept-charset="UTF-8">
                        @csrf
                        <div class="form-group">
                            <label for="userSigninLogin">Email </label>
                            <input required value="{{ old("email")}}" name="email" type="text" class="form-control"
                                   id="userSigninLogin"
                                   placeholder="Entrez votre email"/>
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="userSigninPassword">Mot de passe</label>
                            <input required name="password" type="password" class="form-control" id="userSigninPassword"
                                   placeholder="Entrez votre mot de passe"/>
                            @if ($errors->has('password'))
                                <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-main btn-round-full float-lg-left">Se connecter</button>
                    </form>
                    <div class="clearfix"></div>
                    <br>
                    <x-messages-component/>
                </div>
                <div class="col-md-6">
                    <h3>Demande devis en ligne</h3>
                    <span style="color: #b3b3b3;margin-bottom: 9px;display: inline-block;" class="text-sm">Cette inscription est entièrement gratuite, elle va vous permettre de créer votre devis gratuitement et de manière immédiate.</span>
                    <form method="POST" action="/signup" accept-charset="UTF-8">
                        @csrf
                        <div class="form-group">
                            <label for="registerName">Nom</label>
                            <input value="{{old("name")}}" required name="name" type="text" class="form-control"
                                   id="registerName"
                                   placeholder="Entrez votre nom complet"/>
                        </div>
                        <div class="form-group">
                            <label for="registerEmail">Email</label>
                            <input value="{{old("s_email")}}" required name="s_email" type="email" class="form-control"
                                   id="registerEmail"
                                   placeholder="Entrez votre email"/>
                            @error("s_email")
                            <small id="helpId" class="form-text text-danger"> {{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="registerPassword">Mot de passe (Aucune restriction)</label>
                            <input required name="password" type="password" class="form-control" id="registerPassword"
                                   placeholder="Mot de passe"/>
                        </div>
                        <button type="submit" class="btn btn-main btn-round-full float-lg-left">S'inscrire</button>
                    </form>
                    <div class="clearfix"></div>
                    <br>
                    @if(session("success_signup"))
                        <div class="col-12">
                            <div class="clearfix"></div>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{session("success_signup")}}
                            </div>

                            <script>
                                $(".alert").alert();
                            </script>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
