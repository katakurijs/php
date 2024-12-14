<?php 
    $accounts = array();
    $accounts["katakuri"] = "katakuri@js1";
    if (isset($_POST["username"]) && isset( $_POST["password"])) {
        if (isset($accounts[$_POST["username"]])) {
            if ($_POST["password"] == $accounts[$_POST["username"]]) {
                session_start();
                $_SESSION["username"] = $_POST["username"];
                header("Location: dashboard.php");
                exit();
            }
            else {
                echo '<p color="red">Password incorrect</p>';
            }
        } else {
            echo '<p color="red">Username not found</p>';
        }
    } else {
        echo '<p color="red">Data not found</p>';
    };
?>