@extends("layouts._main")
@section("title"," Réalisations")

@push("style")
    <style>
        @media only screen and (max-width: 600px) {
            .small-screen-td {
                justify-content: center;
            }

            .small-screen-td > div:nth-child(2) {
                text-align: center;
            }
        }
    </style>
@endpush

@section("content")
    <div class="container  section">
        <div class="table-container table-responsive ">
            <table class="table  table-striped w-100 table-bordered">
                <thead>
                <tr>
                    <th class="text-center">Date pose</th>
                    <th class="text-center">Informations Client</th>
                    <th class="text-center"> Pays</th>
                    <th class="text-center">Descritifs usage</th>

                    <th class="text-center">Photos</th>
                    <th class="text-center">Vidéos</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $el)
                    <tr>
                        <td class=" w-20">{{\Illuminate\Support\Facades\Date::make($el->installation_date)->format("j/m/Y")}}</td>
                        <td>
                            <div class="row small-screen-td">
                                <div class="col-12 col-md-6">
                                    <img width="110px" src="{{Storage::url($el->logo)}}" alt="">
                                </div>
                                <div class="col-12 col-md-6">
                                    {{$el->client_name}}
                                </div>
                                
                            </div>
                        </td>
                        <td>
                            <div class="row small-screen-td "> 
                                <div class="col-12 col-md-12">
                                    <div class="d-flex w-100 flex-column text-center">
                                        <img width="80px" src="{{Storage::url($el->country->logo)}}"
                                             alt="{{$el->country->title}}"/>
                                        {{-- {{$el->country->title}} --}}

                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">{{$el->description}}</td>
                        <td style="padding:20px">
                            <a href="#modal-{{$el->id}}" rel="modal:open" class="row container-32"
                               data-custom-open="modal-1">
                                @foreach(json_decode($el->images) as $img)
                                    <img  class="r-photo-32" src="{{Storage::url($img)}}"/>
                                @endforeach
                            </a>
                        </td>
                        <td>
                            @if($el->video)
                        <video width="100" height="100" controls="controls" src="{{Storage::url($el->video)}}"></video>
                        {{-- <p>{{Storage::url($el->video)}}</p> --}}
                        
                                {{-- <iframe src="{{$el->video}}" frameborder="0" allow="autoplay; fullscreen"
                                        allowfullscreen=""></iframe> --}}
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push("bottom")
    @foreach($data as $el)
        <div id="modal-{{$el->id}}" class="modal">
            <div data-interval="false" id="carouselSlide{{$el->id}}" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    @for($i=0;$i<count(json_decode($el->images));$i++)
                        <li data-target="#carouselSlide{{$el->id}}" data-slide-to="{{$i}}" class="{{$loop->first?"active":""}}"></li>
                    @endfor
                </ol>

                <div class="carousel-inner">
                    @foreach(json_decode($el->images) as $img)

                        <div class="carousel-item {{$loop->first?"active":""}}">
                            <div class="d-flex align-items-center justify-content-center h-100">
                                <img class="d-block h-100" src="{{Storage::url($img)}}">
                                <div class="carousel-caption d-none d-md-block">
                                    <p class="text-center">{{$loop->index+1}}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselSlide{{$el->id}}" role="button"
                   data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselSlide{{$el->id}}" role="button"
                   data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    @endforeach
@endpush

@push("style")
    <link rel="stylesheet" href="{{asset("css/slider.css")}}">
    <style>
        .table-container {
            max-width: 100%;
            max-height: 80vh;
            overflow-x: auto;
            overflow-y: scroll;
        }
        .table-container > table{
            overflow: hidden;
            /*overflow-y: visible;*/
        }

        .carousel-inner, .carousel, .carousel-item {
            height: 100% !important;
        }


        .carousel-item > img {
            height: 100% !important;
            max-width: 100% !important;
            width: auto !important;
            /*object-fit: scale-down;*/
        }

        .modal {
            max-width: initial;
            width: 100% !important;
            height: calc(100vh - 55px) !important;
            background-color: #01000c;
        }

        .carousel-control-next-icon, .carousel-control-prev-icon {
            background-color: #0000007a !important;
            height: 57px;
        }


        .container-32 {
            width: 128px;
            cursor: pointer;
        }

        .r-photo-32 {
            width: 64px;
            height: 32px;
            object-fit: cover;
        }



        img {
            max-width: 100% !important;
        }
    </style>
@endpush
@push("script")
    <script defer>
        $('.carousel').carousel('pause');
    </script>
@endpush
