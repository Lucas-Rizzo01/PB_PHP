<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <a href="/PB_PHP/Atividade01/produto/telaCadastro">Voltar para tela de cadastro</a>
    <h2>Produtos</h2>
    <table border ="1">
        <tr>
            <th>Produto</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Validade</th>
        </tr>
        <?php foreach ($produtos as $p): ?>
            <tr>
                <td><?=$p['nome']?></td>
                <td>R$<?=$p['valor']?></td>
                <td><?=$p['quantidade']?></td>
                <td><?=$p['validade']?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>
