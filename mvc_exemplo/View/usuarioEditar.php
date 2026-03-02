<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <h2>Editar Usuário</h2>
    <a href="/PB_PHP/mvc_exemplo/usuario/listar">Voltar para tela listar</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id']?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="nome" value="<?= htmlspecialchars($usuario['nome'])?>" require>
        <input type="email" name="email" value="<?= htmlspecialchars($usuario['email'])?>" require>
        <button type="submit">Editar</button>
    </form>
</body>
</html>