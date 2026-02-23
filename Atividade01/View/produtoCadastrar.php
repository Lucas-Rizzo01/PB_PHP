<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <title>Cadastro de Produtos</title>
</head>
<body>
    <a href="/PB_PHP/Atividade01/produto/listar">Ir para tela listar</a>
    <form method="POST" action="salvar">
        <input type="text" name="nome" placeholder="Produto" require>
        <input type="number" name="valor" placeholder="Valor" require>
        <input type="number" name="quantidade" placeholder="Quantidade" require>
        <input type="date" name="validade" placeholder="Validade" require>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>