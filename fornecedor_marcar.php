<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor :: Marcar</title>
    <?php
    include "referencias.php";
    ?>
</head>

<body>
    <form method="post" action="fornecedor_inserir.php">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Fornecedor :: Marcar</h2>
                <div class="form-group">
                    <label>NOME</label>
                    <input type="text" class="form-control" required="" placeholder="Descricao da Fantasia" name="txtNome_Fantasia">
                </div>

               

                <div class="form-group">
                    <label>CATEGORIA</label>
                    <select name="txtCATEGORIA" class="form-control">
                        <option value="Alta">Alta</option>
                        <option value="Média">Média</option>
                        <option value="Baixa">Baixa</option>
                    </select>
                </div>


                <div class="form-group">
                    <label>ENDEREÇO</label>
                    <input type="text" class="form-control" placeholder="Endereço" name="txtENDERECO">
                </div>

                
                <div class="form-group">
                    <label>TELEFONE</label>
                    <input type="text" class="form-control" placeholder="TELEFONE" name="txtTELEFONE">
                </div>


                <div class="form-group">
                    <label>EMAIL</label>
                    <input type="text" class="form-control" placeholder="EMAIL" name="txtEMAIL">
                </div>



                <br>
                <div class="form-group">

                    <button class="btn btn-primary" type="submit">Marcar</button>

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