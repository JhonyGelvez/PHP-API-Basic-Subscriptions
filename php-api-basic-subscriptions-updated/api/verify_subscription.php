<?php
require "db.php";
$email=$_GET["email"];
$s=$pdo->prepare("SELECT status FROM users WHERE email=?");
$s->execute([$email]);
echo json_encode($s->fetch(PDO::FETCH_ASSOC));
?>