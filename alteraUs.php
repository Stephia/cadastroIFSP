<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM Cliente WHERE id = $id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="alteraUsExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Clientes</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
            </div>
            <?php

                $sql = "SELECT * FROM Cidade";
                $result = mysqli_query($con, $sql);

                if ($result->num_rows > 0) {

                    echo "<label for='cidade'>Selecione sua cidade:</label><br>";
                    echo "<select name='cidade' id='cidade'>";
                    
                    while($row = $result->fetch_assoc()) {
                        $cidade_id = $row["id"];
                        $cidade_nome = $row["nome"];
                        $cidade_estado = $row["estado"];
                        echo "<option value='$cidade_id'>$cidade_nome - $cidade_estado</option>";
                    }
                    
                    echo "</select><br>";
                } else {
                    echo "Nenhuma cidade encontrada.";
                }

            ?>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
            </div>
        </fieldset>
        <div>
            <button type="submit"><a href="index.html">Voltar ao inicio</a></button>
        </div>
        <div>
            <button type="submit"><a href="listarUs.php">Voltar</a></button>
        </div>
    </form>
</body>
</html>