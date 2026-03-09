<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="PB_PHP/situacao_de_aprendizagem_01/livro/listar">Livros cadastrados</a>
    <form method="POST" action="salvar">
        <input type="text" name="titulo" placeholder="Título do livro" require>
        <input type="text" name="autor" placeholder="Autor do livro" require>
        <input type="date" name="ano_publicacao" placeholder=" Data de publicação do livro" require>
        <input type="text" name="editora" placeholder="Editora" require>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>