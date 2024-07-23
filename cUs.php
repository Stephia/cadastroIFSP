<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <?php
        include('includes/conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $id = $_POST['id'];

        echo "<h1>Dados da Cidade</h1>";
        echo "Nome: $nome<br>";
        echo "Estado: $estado<br>";

        $sql = "INSERT INTO cidade (id, nome, estado) VALUES('".$id. "','".$nome."','".$estado."')";

        echo $sql;

        $result = mysqli_query($con, $sql);

        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
            
        }
    ?>
    <div>
        <button type="submit"><a href="index.html">Voltar ao ínicio</a></button>
    </div>
    <div>
        <button type="submit"><a href="CadastroCidade.html">Voltar</a></button>
    </div>
</body>
</html>