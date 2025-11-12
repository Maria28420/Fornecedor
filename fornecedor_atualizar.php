<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor :: Atualizar</title>

    <?php
    include "referencias.php"
        ?>
</head>

<body>
    <br>
    <?php

    $cnpj = $_POST["txtCnpj"];
    $nome_fantasia = $_POST["txtNome_Fantasia"];
    $categoria = $_POST["txtCategoria"];
    $endereco = $_POST["txtEndereco"];
    $telefone = $_POST["txtTelefone"];
    $email = $_POST["txtEmail"];

    // Prepara a instrução SQL
    // Os '?' são parametros para os dados
    $sql = "UPDATE fornecedor SET nome_fantasia = ?, categoria = ?, endereco = ?, telefone = ?, email = ? WHERE cnpj = ?";

    // Prepara o comando
    $comando = $conexao->prepare($sql);

    
    // Vincula os parâmetros à instrução
    // 's' significa string, 'i' significa integer, 'd' significa double
    // O número de 's's deve corresponder ao número de '?'s
    $comando->bind_param("dsssss", $cnpj,$nome_fantasia, $categoria, $endereco, $telefone, $email);

    // Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Fornecedor atualizado com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao atualizar o Fornecedor:</h1> " ;
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();
    ?>
</body>

</html>