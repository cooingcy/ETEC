<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.app')
    <link href="{{ asset('css/quem_somos.css') }}" rel="stylesheet">
    @section('title', 'Quem Somos')
    @section('content')
    <title>Document</title>
    <style>
        .background-section {
            background-image: url('{{ asset('imagens/fundo_quem_somos.png') }}');
        }
    </style>
</head>

<body>
    <x-header />
    <x-container>
        <button class="back-button" type="submit" onclick="window.location.href='/'">
            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                <path
                    d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
                </path>
            </svg>
            <span>Voltar</span>
        </button>
        <div class="background-section">
            <h3>Conheça Nossa Instituição: Tradição, Inovação e Compromisso com a Excelência Educacional</h3>
        </div>
        <div class="conteudo">
            <h2>ETEC Zona Leste</h2>
            <p>Fundada em [insira o ano de fundação], a Etec Zona Leste rapidamente se estabeleceu como uma instituição
                de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades
                de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los
                a buscar a excelência acadêmica.</p>

            <p>Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando
                sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e
                funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática,
                administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.</p>

            <p>Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares,
                que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas
                atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e
                estimulando o trabalho em equipe, a liderança e a criatividade.</p>
        </div>
    </x-container>
    <x-footer />
    @endsection
</body>

</html>