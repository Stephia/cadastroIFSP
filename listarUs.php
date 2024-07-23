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

        $sql = "SELECT cli.id, cli.nome , cli.email, cli.ativo, ci.nome nomecidade, ci.estado FROM cliente cli LEFT JOIN cidade ci on ci.id = cli.id_ci";
        $result = mysqli_query($con, $sql);
    ?>
    <h1>Consulta de Clientes</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ativo</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['ativo']."</td>";
                echo "<td>".$row['nomecidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href='alteraUs.php?id=".$row['id']."'>Alterar?</a></td>";
                echo "<td><a href='deletaUs.php?id=".$row['id']."'>Deletar?</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <div>
        <button type="submit"><a href="CadastroUs.html">Cadastrar Novo Cliente</a></button>
    </div>
    <div>
        <button type="submit"><a href="OpcUs.html">Voltar</a></button>
    </div>
</body>
</html>