<?php

require_once "config.php"; 


$sql="INSERT INTO tbl_authors(author_name,phone,email,website,`address`) VALUES(:name1,:phone,:email,:website,:address)";

if($stmt=$connection->prepare($sql)){
    $stmt->bindParam("name1",$name);
    $stmt->bindParam("phone",$phone);
    $stmt->bindParam("email",$email);
    $stmt->bindParam("website",$website);
    $stmt->bindParam("address",$address);
    $name=$_POST["author_name"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $website=$_POST["website"];
    $address=$_POST["address"];
    if($stmt->execute()){
        header("Location:action.php");
        exit;
    }else{
        header("Location:create.php");
        exit;
    }
}