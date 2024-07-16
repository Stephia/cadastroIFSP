<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
?>
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
        $sql = "UPDATE cidade SET nome = '$nome', estado = '$estado' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if ($result)
            echo "Dados Atualizados";
        else
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
    ?>
    <div>
        <button type="submit"><a href="listarCidade.php">Voltar</a></button>
    </div>
</body>
</html>