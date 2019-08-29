<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Well.com</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <?php $msg = $_GET["msg"]; ?>
        <div class="alert alert-primary" role="alert">
          <?php echo $msg; ?>
        </div>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>