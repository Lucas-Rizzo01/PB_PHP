<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar livro</title>
</head>
<body>
    <h2>Editar Livros</h2>
    <a href="PB_PHP/situacao_de_aprendizagem_01/livro/listar">Voltar para: Livros cadastrados</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id']?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="titulo" value="<?= htmlspecialchars($_GET['TITULO'])?>" require>
        <input type="date" name="autor" value="<?= htmlspecialchars($_GET['AUTOR'])?>" require>
        <input type="text" name="ano_publicacao" value="<?= htmlspecialchars($_GET['ANO_PUBLICACAO'])?>" require>
        <input type="text" name="editora" value="<?= htmlspecialchars($_GET['EDITORA'])?>" require>
        <button type="submit">Editar</button>
    </form>
</body>
</html>