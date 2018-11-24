@extends('layouts.app')

@section('content')
<div class="carousel slide carousel-fade alto_carrusel" data-ride="carousel" id="carouselExampleFade">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img alt="First slide" class="d-block w-100" src="https://media-cdn.tripadvisor.com/media/photo-s/0f/a6/76/0a/restaurante.jpg">
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
    </div>
</div>
@endsection
