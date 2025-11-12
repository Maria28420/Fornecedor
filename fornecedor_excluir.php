<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fornecedor :: Excluir</title>
    <?php
    include "referencias.php";
    ?>
</head>
<body>
     <?php
     //incluir as referencias para o BD e o css
     
     //capturar do FROM que é o CNPJ a ser removido
     $cnpj=$_POST["txtCnpj"];
     //Construir a estrutura do comando DELETE
     $sql="DELETE FROM fornecedor  WHERE cnpj=?";
     //Criar o objeto comando associado a conexão de dados
     $comando=$conexao->prepare($sql);
     //Associar comando parametro do comando SQL com as variáveis
     $comando->bind_param("d",$cnpj);
     //Executar comando no BD
     if($comando->execute())
     {
        echo "<h1> FORNECEDOR FOI REMOVIDO!</h1>";
     }
     else
    {
        echo "<h1>NÃO FOI POSSÍVEL REMOVER O FORNECEDOR! </h1>";
    }
     ?>



</body>
</html>