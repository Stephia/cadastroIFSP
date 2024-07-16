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

        $sql = "SELECT * FROM cidade";
        $result = mysqli_query($con, $sql);
        //$row = mysqli_fetch_array($result);
    ?>
    <h1>Consulta de Cidades</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Estado</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='alteraCidade.php?id=".$row['id']."'>Alterar?</a></td>";
                echo "<td><a href='deletaCidade.php?id=".$row['id']."'>Deletar?</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <div>
        <button type="submit"><a href="CadastroCidade.html">Cadastrar Nova Cidade</a></button>
    </div>
    <div>
        <button type="submit"><a href="index.html">Voltar</a></button>
    </div>
</body>
</html>