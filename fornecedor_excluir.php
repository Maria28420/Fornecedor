<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fornecedor :: Excluir</title>
</head>
<body>
     <?php
     //incluir as referencias para o BD e o css
     include "referencias.php";
     //capturar do FROM que é o ID a ser removido
     $id=$_POST["txtId"];
     //Construir a estrutura do comando DELETE
     $sql="DELETE FROM fornecedor  WHERE id=?";
     //Criar o objeto comando associado a conexão de dados
     $comando=$conexao->prepare($sql);
     //Associar comando parametro do comando SQL com as variáveis
     $comando->bind_param("i",$id);
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