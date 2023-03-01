<?php

function Connection(){
    global $connection;

    $connection = mysqli_connect("localhost", "root", "", "loginapp");
    
}


// přidání záznamu do databáze
    function AddFun(){
        global $connection;
        $username = $_POST["username"];
        $userlastname = $_POST["userlastname"];
        $dateofbirth = $_POST["dateofbirth"];
        $phonenumber = $_POST["phonenumber"];

        $query = "INSERT INTO users(username,userlastname,dateofbirth,phonenumber) VALUES('$username','$userlastname','$dateofbirth','$phonenumber')";

        $result = mysqli_query($connection,$query);

        if(!$result){
            die("Nepodařilo se data zapsat do databáze.");
        }

    }

?>
