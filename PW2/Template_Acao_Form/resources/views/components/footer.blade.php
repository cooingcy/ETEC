<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer no Fim da Página</title>
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
</head>

<body>
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Meu Site. Todos os direitos reservados.</p>
        </div>
    </footer>
    </div>
    <script>
        // Função para verificar se o usuário está no final da página
        function checkScrollPosition() {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                document.querySelector('.footer').style.display = 'block';
            } else {
                document.querySelector('.footer').style.display = 'none';
            }
        }

        // Adiciona um evento de rolagem para verificar a posição
        window.addEventListener('scroll', checkScrollPosition);

        // Chama a função ao carregar a página
        checkScrollPosition();
    </script>
</body>

</html>