<!-- Comandos
    composer install
    cp .env.example .env
    criar um banco de daods, com o mesmo nome
    php artisan migrate
    php artisan key:generate (se n houver nenhuma)
    php artisan serve - rodar o servidor
 !-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .navbar {
            background: #333;
            color: #fff;
            padding: 0.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            background: #429413;
            border-radius: 5px;
        }

        .navbar a:hover {
            background: #203b11;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 2rem 0;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        .actions a, .actions button {
            color: #007bff;
            border: none;
            background: none;
            cursor: pointer;
            margin-right: 1rem;
        }

        .actions button {
            background: #dc3545;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .actions button:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <header class="navbar">
        <h1>Lista de Usuários</h1>
        <a href="{{ route('usuarios.create') }}">Criar Novo Usuário</a>
    </header>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Nascimento</th>
                <th>Ações</th>
            </tr>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->data_nasc }}</td>
                    <td class="actions">
                        <a href="{{ route('usuarios.edit', $usuario) }}">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <script>
        function confirmDelete() {
            return confirm('Tem certeza de que deseja excluir este usuário?');
        }
    </script>
</body>
</html>
