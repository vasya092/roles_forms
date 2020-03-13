<?php
require_once "db.php";

$userName = $_POST['username'];
$roleId = $_POST['roleid'];

$query = DB::prepare("INSERT INTO user VALUES (NULL,?,?)");
$query->execute([$userName, $roleId]);

?>