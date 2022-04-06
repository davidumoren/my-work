<?php

if(isset($_POST['submit'])){
include_once 'dbh.inc.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

    if($first === "" || $last ===""  || 
    $email==="" || $uid===""||$pwd ==="" ){
        header("Location:../index.php?signup=empty");
         exit();
    }else{

        //sought this out ==== if user enters and invalid character
        //grab data form the url is not responding yet
        //things to sought out next time
        
    if(!preg_match("/^[a-zA-Z]*$/", $first) 
    || !preg_match("/^[a-zA-Z]*$/", $last)){
            header("Location:../index.php?signup=char");
             exit();
        }else{

     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         header("Location:../index.php?signup=invalidemail");
     exit();
        } else {
            header("Location:../index.php?signup=success"); 
            exit();
        }
    }
  }

}else {

    header("Location:../index.php");
    //echo "You did not fill out a form!";
    exit();
}