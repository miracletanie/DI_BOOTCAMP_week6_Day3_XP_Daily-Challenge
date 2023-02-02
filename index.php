<?php
if (!empty($_GET)) {
    $u = $_GET["u"];
    if ($u <= 50) {
        echo $u = $u * 3.50 . "fr";
    }

    elseif ($u <= 100) {
        echo $u = $u * 4.00 . "fr";
    }

    elseif (($u > 100) && ($u <= 250)) {
        echo $u = $u * 5.20 . "fr";

    }

    else {
        echo $u = $u * 5.50 . "fr";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">Entrer les unités de votre factures</label><br>
        <input type="number" name="u">
        <input type="submit">
    </form>
</body>
</html>