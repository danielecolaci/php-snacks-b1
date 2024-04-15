<!-- Con un form passare come parametri GET name, mail e age e verificare che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

 if(strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="name" placeholder="Inserisci il tuo nome">
    <input type="text" name="mail" placeholder="Inserisci una mail valida">
    <input type="text" name="age" placeholder="Inserisci la tua età">
    <button type="submit">Submit</button>
</form>
</body>
</html>