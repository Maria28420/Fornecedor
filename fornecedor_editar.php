<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor :: Editar</title>
    <?php
    include "referencias.php";
    ?>
</head>

<body>
    <?php
       //1º PASSO:Criar variáveis para armazenar os dados do comando SELECT
       $id=$_POST["txtId"]; //o ID foi informado na página de PESQUISAR
       $cnpj = "";
       $nome_fantasia = "";
       $categoria = "";
       $endereco = "";
       $telefone = "";
       $email = "";

       //2º PASSO: Construir o comando SQL - select
       $sql="SELECT * FROM Fornecedor where id = ?";

       //3º PASSO:Preparar o comando SQL  para ser executando na canexão
       $comando= $conexao->prepare($sql);

       //4º PASSO: Associar os valores dos parâmetros do comando sql
       $comando->bind_param("i",$id);

       //5º PASSO: Executar o comando sql
       $comando->execute();

       //OBS: Como o comando SELECT traz um retorno de dados,
       // precisamos guardar os resultados em uma variável
       $resultado=$comando->get_result();
       if($resultado->num_rows <= 0)
       {
          echo "<h1>Este Fornecedor não foi cadastrado!</h1>";
       }
       else
       {
         //OBS: Como um comando SELECT pode retornar várias linhas de registro,
         //pecisamos capturar linha por linha dos valores que estão em resultado
         
         //Pega uma linha/registro retornado
         $registro= $resultado->fetch_assoc();

         //Preenche as variáveis com o que o SELECT retornou
         $cnpj=$registro["cnpj"];
         $nome_fantasia=$registro["nome_fantasia"];
         $categoria=$registro["categoria"];
         $endereco=$registro["endereco"];
         $telefone=$registro["telefone"];
         $email=$registro["email"];
     
       }

    ?>

    <form method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Fornecedor :: Editar</h2>
                <div class="form-group">
                    <label>Id</label>
                    <input value="<?php echo $id ?>" type="text" class="form-control" required="" placeholder="Id da tarefa" name="txtId">
                </div>

                <div class="form-group">
                    <label>Cnpj</label>
                    <input value="<?php echo $cnpj ?>" type="text" class="form-control" required="" placeholder="Descricao da tarefa" name="txtCnpj">
                </div>

                <div class="form-group">
                    <label>Nome_Fantasia</label>
                    <input value="<?php echo $data_entrega ?>" type="text" class="form-control" required="" name="txtNome_Fantasia">
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <select name="txtCategoria" class="form-control">
                        <option value="Alta">Alta</option>
                        <option value="Média">Média</option>
                        <option value="Baixa">Baixa</option>
                    </select>
                </div>


                <div class="form-group">
                    <label>Endereco</label>
                    <input value="<?php echo $endereco ?>" type="text" class="form-control" placeholder="Endereço do fornecedor" name="txtEndereco">
                </div>

                 <div class="form-group">
                    <label>Telefone</label>
                    <input value="<?php echo $telefone ?>" type="text" class="form-control" placeholder="Telefone do fornecedor" name="txtTelenone">
                </div>

                 <div class="form-group">
                    <label>Email </label>
                    <input value="<?php echo $email ?>" type="text" class="form-control" placeholder="Email do fornecedor" name="txtEmail">
                </div>


                <br>
                <div class="form-group">

                    <button formaction="fornecedor_atualizar.php"type="submit" class="btn btn-primary" name="btEditar">
                        Editar
                    </button>

                    <button formaction="fornecedor_excluir.php" type="submit" class="btn btn-warning" name="btExcluir">
                        Excluir
                    </button>


                    <a href="index.php">
                        <button type="button" class="btn btn-danger" name="btVoltar">
                            Voltar
                        </button>
                    </a>

                </div>

            </div>
        </div>
    </div>
    </form>

</body>

</html>