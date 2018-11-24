@extends('layouts.app')

@section('content')
<div class="carousel slide carousel-fade alto_carrusel" data-ride="carousel" id="carouselExampleFade">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img alt="First slide" class="d-block w-100" src="https://www.hotelwyndhambogota.com/wp-content/uploads/2016/11/RESTAURANTE_WYNDHAM_BOGOTA_ART.jpg">
            </img>
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-white">
                    La tecnologia, en tu restaurante favorito
                </h1>
                <p class="text-white">
                    nombre de la aplicacion gustoso de atenderlos.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img alt="Second slide" class="d-block w-100" src="https://img.chilango.com/2017/12/robo-en-polanco.jpg">
            </img>
            <div class="carousel-caption d-none d-md-block">
                <h1>
                    pedir en un restaurante nunca fue tan facil
                </h1>
                <p>
                    desde tu mesa puedes estar en la cocina.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img alt="Third slide" class="d-block w-100" src="https://www.queremoscomer.rest/processed/img/establecimientos/fotos/354/restaurante-recorte-7884555656.$thumb,1600,1200.jpg">
            </img>
            <div class="carousel-caption d-none d-md-block">
                <h1>
                    Esperamos disfrutes esta nueva esperiencia
                </h1>
                <p>
                    es un gusto tenerlos como visitantes.
                </p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleFade" role="button">
        <span aria-hidden="true" class="carousel-control-prev-icon">
        </span>
        <span class="sr-only">
            Previous
        </span>
    </a>
    <a class="carousel-control-next" data-slide="next" href="#carouselExampleFade" role="button">
        <span aria-hidden="true" class="carousel-control-next-icon">
        </span>
        <span class="sr-only">
            Next
        </span>
    </a>
</div>
<div class="container">
    <div class="row">
        <h4 class="all col-md-8">
            Conoce nuestros restaurantes.
        </h4>
        <div class="col-md-12">
            <br>
            </br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Restaurante 1
                                    </h5>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a class="btn btn-info col-md-12" href="#">
                                        Conocer
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Restaurante 2
                                    </h5>
                                    <p class="card-text">
                                        With supporting text below as a natural lead-in to additional content.
                                    </p>
                                    <a class="btn btn-info col-md-12" href="#">
                                        Conocer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
