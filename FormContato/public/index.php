<?php require "../bootstrap.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Formulário - fins de Estudos">
    <meta name="author" content="Eduardo Developer">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Formulário de Contato</title>

</head>
<body>
    <div class="container">
        <?php
try {
    require load();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
    </div>
</body>
</html>