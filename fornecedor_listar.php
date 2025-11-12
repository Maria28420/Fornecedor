<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor :: Listar</title>

    <?php
    include "referencias.php";
    ?>

</head>

<body>
    <form  action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">


                    <h2>Fornecedor :: Listar</h2>

                    <div class="form-group">
                        <table>

                            <tr>
                              
                                <td>Nome_Fantasia</td>
                                <td>Categoria</td>
                                <td>Endereço</td>
                                <td>Telefone</td>
                                <td>Email</td>
                            </tr>
                          <?php
                            //1º Passo: Montar o comando SQL que será executado
                            $sql="SELECT * from fornecedor Order by nome_fantasia desc";
                            //2º Passo: Preparar o comando para ser executado na conexão de dados
                            $comando= $conexao-> prepare($sql);
                            //3º Passo: Executar o comando
                            $comando-> execute();
                            //4º Passo: capturar os resultados trazidos pelo mysql
                            $resultado= $comando->get_result();
                            //5º Passo: Pegar todas as linhas de dados que estão em Resultados
                            while($registro = $resultado->fetch_assoc())
                                {
                               
                                $nome_fantasia = $registro["nome_fantasia"];
                                $categoria = $registro["categoria"];
                                $endereco = $registro["endereco"];
                                $telefone = $registro["telefone"];
                                $email = $registro["email"];

                          ?>
                          <tr> 
                            
                            <td> <?php echo $nome_fantasia ?> </td>
                            <td> <?php echo $categoria?> </td>
                            <td> <?php echo $endereco?> </td>
                            <td> <?php echo $telefone?> </td>
                            <td> <?php echo $email?> </td>
                          </tr>
                          <?php } ?>

                        </table>
                    </div>

                    <div class="form-group">

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