<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
       <h3>Cadastro de Clientes</h3>
       <hr>
        <form action="" method="post">
            <label>Nome: </label>
            <input type="text" class="form-control col-md-4">
            <label>E-mail: </label>
            <input type="email" class="form-control col-md-4">
            <label>Estado Civil</label>
            <select class="form-control col-md-4">
                <option value="">- Escolha -</option>
                <option value="Solteiro">Solteiro(a)</option>
                <option value="Casado">Casado(a)</option>
                <option value="Divorciado">Divorciado(a)</option>
                <option value="Viúvo">Viúvo(a)</option>
            </select><br>
            <label>Sexo: </label>
            <input type="radio" value="M"> Masculino
            <input type="radio" value="F"> Feminino
        </form>
    </div>
</body>
</html>