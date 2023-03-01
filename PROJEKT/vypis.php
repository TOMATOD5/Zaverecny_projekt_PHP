<?php
    // připojení do databáze
    $connection = mysqli_connect("localhost", "root", "", "loginapp");

    //výpis celé databáze
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Dotaz do databáze selhal" . mysqli_error());
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylelisting.css" type="text/css" />
    <title>Výpis uživatelů</title>
</head>

<body>
    <div class="login-box" ">
        <?php
        // vypíše všechnny sloupce
        while($row = mysqli_fetch_assoc($result)){
            echo "<pre>";
            print_r($row);
            echo "</pre>";
        }
        ?>
    </div>
</body>
</html>


