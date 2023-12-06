<?php
	if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $msg = $_POST["message"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyContactUs($name, $email, $subject, $msg) !== false){
        header("location:../index.php?error=emptyinput");
        exit();

    }


    contactus($conn, $name, $email, $subject, $msg);



}

else{
    header("location:../index.php");
}


?>