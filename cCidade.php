<?php
    include('includes/conexao.php');

    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $id = $_POST['id'];

    echo "<h1>Dados da Cidade</h1>";
    echo "Id: $id<br>";
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
    }
?>