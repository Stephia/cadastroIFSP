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
        $ativo = $_POST['ativo'];
        $cidade = $_POST['cidade'];

        echo "<h1>Dados do Usuário</h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "Cidade: $cidade<br>";

        $sql = "INSERT INTO Cliente (nome, email, senha, ativo, id_ci) VALUES('".$nome."','".$email."','".$senha."','".$ativo."', '".$cidade."')";

        echo $sql;

    ?>
    <div>
        <button type="submit"><a href="OpcUs.html">Voltar ao inicio</a></button>
    </div>
    <div>
        <button type="submit"><a href="CadastroUs.html">Voltar</a></button>
    </div>
</body>
</html>