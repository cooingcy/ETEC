@extends('layouts.app')

<link href="{{ asset('css/form.css') }}" rel="stylesheet">

@section('title', 'Contato')

@section('content')
<x-header />
<x-container class="text-center"> <!-- Adicionando a classe "text-center" para centralizar o conteúdo -->
    <button type="submit" onclick="window.location.href='/'">
        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
            <path
                d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
            </path>
        </svg>
        <span>Voltar</span>
    </button>
    <h3>Entre em contato conosco!</h3>
    <div class="form-container">
        <form action="{{ route('contato.enviar') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" required="" placeholder="Digite seu Nome!">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required="" placeholder="Digite seu Telefone!">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required="" placeholder="Digite seu Telefone!">
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <select class="form-select" aria-label="Default select example" name="sexo">
                    <option selected>Selecione seu sexo</option>
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                    <option value="4">Prefiro não dizer</option>
                </select>
            </div>
            <button class="button-enviar" type="submit">Enviar</button>
        </form>
    </div>
</x-container>
<x-footer />
@endsection