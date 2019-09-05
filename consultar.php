<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Well.Com</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h3>Consulta de Clientes</h3>
        <hr>
        <form class="form-inline">
            <div class="form-group">
                <label  class="col-sm-2">Nome: </label>
                <input type="text" name="nome" class="form-control">
                <input type="submit" value="Buscar" class="btn btn-info ml-2">
            </div>
        </form>
        <hr>
        <?php
            if(isset($_GET["nome"])){
                $nome = $_GET["nome"];
                
                include_once 'conexao.php';
                
                $sql = "SELECT * FROM cliente WHERE nome
                LIKE '{$nome}%'";
                
                $result = mysqli_query($con, $sql); 
                
                $totalRegistros = mysqli_num_rows($result);
                
                if($totalRegistros > 0){?>
                    <table class="table table-hover">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Estado Civil</th>
                            <th>Sexo</th>
                        </tr>
                        <?php
                           while($row = mysqli_fetch_array($result)){
                               echo "<tr>";
                               echo "<td>{$row['nome']}</td>";
                               echo "<td>{$row['email']}</td>";
                               echo "<td>{$row['estadocivil']}</td>";
                               echo "<td>{$row['sexo']}</td>";
                               echo "</tr>";
                           }     
                        ?>
                    </table>
                <?php
                }else{
                    echo "Nenhum registro encontrado!";
                }  
                mysqli_close($con);
            }           
        ?>
    </div>
</body>
</html>