<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Data Pemantauan Covid</title>
</head>
<body>
    <a href="index.html">Input Data</a>
    <?php
    $content = file_get_contents('db.html');

    echo $content;
    ?>
</body>
</html>