<?php
function emptyContactUs($name, $email, $subject, $msg){

    $result;
    if(empty($name) || empty($email) || empty($subject) || empty($msg)){
         $result = true;

    }
    else{
        $result = false; 
    }

    return $result;

}




function contactus($conn, $name, $email, $subject, $msg){
    $sql = "INSERT INTO contactus (name, email, subject, message) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();

    }
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $msg);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:  ../index.php?error=none");
    exit();


}


