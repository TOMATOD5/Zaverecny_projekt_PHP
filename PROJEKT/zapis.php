<?php
include "mysql/db.php";
Connection();

if(isset($_POST["submit"])){ AddFun();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleform.css" type="text/css" />
    <title>Registrace pojištěnce</title>
</head>

<body>
    <div class="login-box">
        <form action="zapis.php" method="post">
            <div class="user-box">
                <input required="" type="text" name="username"><label>Jméno</label>
            </div>
            <div class="user-box">
                <input required="" type="text" name="userlastname"><label>Příjmení</label>
            </div>
            <div class="user-box">
                <input required="" type="text" name="phonenumber"><label>Telefonní číslo</label>
            </div>
            <div class="user-box"><p>Datum narození</p>
                <input required="" type="date" name="dateofbirth">
            </div>
            <div>
                <input class="button", type="submit" name="submit" value="Odeslat">
            </div>
        </form>
    </div>
</body>

<footer>
    <p>Copyright © by Richard Jonáš <?php echo date("Y"); ?></p>
</footer>

</html>


