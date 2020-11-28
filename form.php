<?php
$email = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
    } else {
        $error = "L'utilisateur n'existe pas";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
</head>
<body>
   <?= $email ? ' Bienvenue '.$email : $error; ?>
</body>
</html>