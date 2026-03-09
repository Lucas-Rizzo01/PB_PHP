<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros cadastrados</title>
</head>
<body>
    <a href="PB_PHP/situacao_de_aprendizagem_01/livro/telaCadastro">Voltar para tela de cadastro</a>
    <h2>Livros</h2>
    <table border = "1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Data de publicação</th>
            <th>Editora</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($livros as $id => $l):?>
            <tr>
                <td><?=$l['TITULO']?></td>
                <td><?=$l['AUTOR']?></td>
                <td><?=$l['ANO_PUBLICACAO']?></td>
                <td><?=$l['EDITORA']?></td>
                <td>
                    <a href="PB_PHP/situacao_de_aprendizagem_01/livro/telaEditar<?= $l['ID'] ?>">Editar</a>
                    <a href="PB_PHP/situacao_de_aprendizagem_01/livro/excluir<?= $l['ID'] ?>">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>
