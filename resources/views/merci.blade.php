@extends("layouts._main")

@section("title","Devis")

@push("style")
    <style>
        .devis-show {
            height: 700px;
        }

        @media only screen and (max-width: 800px) {
            .devis-show {
                height: 400px;
            }
        }

        @media only screen and (max-width: 400px) {
            .devis-show {
                height: 200px;
            }
        }
    </style>
@endpush

@section("content")
    <div class="main-wrapper">
        <section class="section portfolio pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <x-messages-component/>
                        <div class="section-title">
<span class="h6 text-color">Veuillez trouver ci-dessous votre devis,
vous l’avez également reçu sur votre email. Si vous êtes intéressé il vous suffit de cliquer sur
le bouton « Je suis intéressé » ci-dessous et un de nos techniciens vous contactera pour mener
à bien votre projet. Si au contraire vous n’êtes pas intéressé, veuillez cliquer sur le bouton « Je
ne suis pas intéressé »
</span>
                            <p>Votre Devis</p>
                            <div class="row">
                                <div class="container-fluid">
                                    <embed
                                class="embed-responsive devis-show "
                                src="/devisPDF/{{$devis}}"
                                type="application/pdf"
                                style="width:1000px !important;margin-left:-200px"
                                >
                                </div>
                                 </div>
                             
                            
                                
                             
                            
                            <br>
                            <div class="row flex-column">
                                <div class="col-12 d-flex justify-content-center">
                                    <button id="print-devis" class="btn btn-primary btn-sm"><i class="fas fa-print"></i>
                                        <span>Imprimer le devis</span>
                                    </button>
                                </div>
                                <br>
                                <form
                                    action="/devis_interest/{{$devis}}/1"
                                    method="POST" id="signup-form" class="">
                                    @csrf
                                    <button class="btn btn-success ml-auto" type="submit" title="Send">Je suis intéressé
                                    </button>
                                </form>
                                <form
                                    action="/devis_interest/{{$devis}}/0"
                                    method="POST" id="signup-form" class="mt-2">
                                    @csrf
                                    <button class="btn btn-outline-danger ml-auto" type="submit" title="Send">Je ne suis pas
                                        intéressé
                                    </button>
                                </form>
                            </div>
                            <h2 class="mt-3 content-title ">vérifier vos courriels</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection

        @push("script")
            <script defer src="{{asset("js/print.min.js")}}" crossorigin="anonymous"></script>
            <script>
                $(function () {
                    $("#print-devis").on("click", (ev) => {
                        ev.target.innerText = "Chargement..."
                        ev.target.setAttribute("disabled","true")

                        fetch("/devisPDF64/{{$devis}}")
                            .then(res => {
                                res.text().then(function (base64) {
                                    printJS({
                                        printable: base64,
                                        type: 'pdf',
                                        base64: true,
                                        onError:(err)=>{
                                            alert("Cette fonctionnalité n'est pas prise en charge sur votre appareil")
                                        }
                                    })
                                })
                            })
                            .finally(() => {
                                ev.target.innerText = "Imprimer le devis"
                                ev.target.removeAttribute("disabled")
                            })
                        {{--const options = {--}}
                        {{--    printable: '/devisPDF/{{$devis}}',--}}
                        {{--    type: 'pdf',--}}
                        {{--    showModal: true,--}}
                        {{--    modalMessage: "S'il vous plaît, attendez ...",--}}
                        {{--    onError: (err) => {--}}
                        {{--        alert("Not supported " + JSON.stringify(err))--}}
                        {{--    }--}}
                        {{--}--}}
                        {{--printJS(options)--}}
                    })
                })
            </script>
    @endpush
