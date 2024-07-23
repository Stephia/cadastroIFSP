<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="cUs.php" method="post">
        <fieldset>
            <legend>Cadastro de Usuários</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <div>
                <label for="ativo">Online?</label>
                <select name="ativo" id="ativo">
                    <option value="true">Sim</option>
                    <option value="false">Não</option>
                </select>
            </div>
            <div>

            <label for='cidade'>Selecione sua cidade:</label><br>
            <select name='cidade' id='cidade'>

                <?php
                    include('includes/conexao.php');

                    $sql = "SELECT * FROM Cidade";
                  
                    $result = mysqli_query($con, $sql);
                    
                        while($row = mysqli_fetch_assoc($result)) {
                            $id_ci = $row["id"];
                            $cidade_nome = $row["nome"];
                            $cidade_estado = $row["estado"];
                            echo "<option value='$id_ci'>$cidade_nome - $cidade_estado</option>";
                        }
                        
                        echo "</select><br>";

                ?>
            </div>
            <div>
                <button type="submit"><a href="cUs.php"></a>Cadastrar</button>
            </div>
            <div>
                <button type="submit"><a href="OpcUs.html">Voltar</a></button>
            </div>
        </fieldset>
    </form>
</body>
</html>