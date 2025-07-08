<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Usuário</title>
</head>
<body>
    <h1>Detalhes do Usuário</h1>
    
    <p><strong>ID:</strong> {{ $usuario->id }}</p>
    <p><strong>Nome:</strong> {{ $usuario->name }}</p>
    <p><strong>Email:</strong> {{ $usuario->email }}</p>
    <p><strong>Data de Nascimento:</strong> {{ $usuario->data_nasc }}</p>
    <p><strong>Senha:</strong> {{ $usuario->senha }}</p>

    <a href="{{ route('usuarios.edit', $usuario) }}">Editar</a>
    <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
    <br>
    <a href="{{ route('usuarios.index') }}">Voltar à Lista</a>
</body>
</html>
