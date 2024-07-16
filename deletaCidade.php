<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('includes/conexao.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM cidade WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if ($result){
            echo "<h2>Dados Deletados!</h2>";
        }
        else{
            echo "<h2>Erro ao Deletar!</h2>";
            echo "<h2>".mysqli_error($con)."</h2>";
        }
    ?>
    <div>
        <button type="submit"><a href="index.html">Voltar ao inicio</a></button>
    </div>
    <div>
        <button type="submit"><a href="listarCidade.php">Voltar</a></button>
    </div>
</body>
</html>