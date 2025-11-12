<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor :: Inserir</title>
    <?php
    include "referencias.php";
    ?>
</head>
<body>
    <?php
     //1º PASSO: Capturar os dados de entrada
     $nome_fantasia = $_POST["txtNome_Fantasia"];
     $categoria = $_POST["txtCategoria"];
     $endereco = $_POST["txtEndereco"];     
     $telefone = $_POST["txtTelefone"];     
     $email = $_POST["txtEmail"];     
          

     //2º PASSO: Montar o comando SQL-insert
    $sql= "INSERT INTO fornecedor (nome_fantasia, categoria, endereco, telefone, email) VALUES(?,?,?,?,?)";

    //3º PASSO: Preparar o comando SQL para ser executa
    //Ou seja,relacionar o comando SQL que será executado
    $comando=$conexao->prepare($sql);

    //4º PASSO: Vincular os ??? com as variáveis de entrada de dados
    $comando->bind_param("sssss", $nome_fantasia,$categoria, $endereco, $telefone,$email);

    //5º PASSO: Executar o comando 
     // Executa o statement
    if ($comando->execute()) {
        echo "<h1 class='alert alert-success'>Nova tarefa criado com sucesso!</h1>";
    } else {
        echo "<h1 class='alert alert-danger'>Erro ao inserir o registro:</h1> "; 
    }

    // Fecha o statement e a conexão
    $comando->close();
    $conexao->close();


    ?>
</body>
</html>