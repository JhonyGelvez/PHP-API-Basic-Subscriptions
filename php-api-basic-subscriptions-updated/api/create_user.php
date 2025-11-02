<?php
require "db.php";
$email=$_POST["email"];
$status="inactive";
$s=$pdo->prepare("INSERT INTO users(email,status) VALUES(?,?)");
$s->execute([$email,$status]);
echo json_encode(["success"=>true]);
?>