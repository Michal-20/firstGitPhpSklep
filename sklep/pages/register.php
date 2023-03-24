<!DOCTYPE html>
<html lang="pl ">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>
<body>
    <?php
        $mess = "";
        if(isset($_GET["mess"])){
            $mess = $_GET["mess"];
        }
    ?>
    <form action="../actions/register.php" method="POST">
        <label>Imię:</label>
        <input type="text" name="imie" required><br>     
        <label>Nazwisko:</label>
        <input type="text" name="nazwisko"  required><br>
        <label>Login:</label>
        <input type="text" name="login"  required><br>
        <label>Hasło:</label>
        <input type="password" name="haslo"  required><br>
        <button type="submit">Submit</button>
    </form>
    <p><?= $mess ?></p>
</body>
</html>