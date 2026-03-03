<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <a href="/PB_PHP/mvcMysql/usuario/telaCadastro">Voltar para tela de cadastro</a>
    <h2>Usuários</h2>
    <table border ="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $id => $u): ?>
            <tr>
                <td><?=$u['NOME']?></td>
                <td><?=$u['EMAIL']?></td>
                <td>
                    <a href="/PB_PHP/mvcMysql/usuario/telaEditar?id=<?= $u['ID'] ?>">
                        Editar
                    </a>  
                    <a href="/PB_PHP/mvcMysql/usuario/excluir?id=<?= $u['ID'] ?>">
                        Excluir
                    </a>    
                </td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>
