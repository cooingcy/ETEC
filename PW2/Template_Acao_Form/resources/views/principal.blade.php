@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

@section('title', 'Página Principal')

@section('styles')

@section('content')
<x-header />
<div class="content-overlay">
    <x-container>
        <h2>ETEC ZONA LESTE</h2>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagens/fundo3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagens/fundo2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagens/fundo1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <div class="container">
            <figure class="figure">
                <img src="imagens/fundo1.jpg" class="figure-img img-fluid rounded" alt="...">
            </figure>
            <div class="texto">
                <h3>O que a ETEC pode fazer pelo seu FUTURO ainda HOJE?</h3>
                <p>Entendemos que, em algumas ocasiões, pensar sobre o futuro pode parecer intimidador. Constantemente,
                    traçamos carreiras e planejamos nosso desenvolvimento profissional em nossas mentes, sempre em busca
                    do
                    melhor caminho a seguir.
                    No entanto, a ETEC Zona Leste está ciente de suas aspirações e está aqui para lhe oferecer uma nova
                    trajetória! O futuro não precisa ser amedrontador.
                    Você pode desenvolver suas habilidades técnicas e profissionais enquanto estuda conosco. Em nossa
                    instituição, valorizamos cada pequeno passo.
                    Dê seu primeiro passo hoje rumo ao futuro. Junte-se à ETEC!</p>
            </div>
        </div>
        <div class="btn">
            <button class="btn_sobre_nos" type="submit" onclick="window.location.href='/quem_somos'">Saiba
                mais</button>
        </div>
    </x-container>
</div>
<x-footer />
@endsection