<?php
require_once 'db.php';

$role_name = $_POST['rolename'];

$query = DB::prepare("INSERT INTO user_role (rolename) VALUES (?)");
$query->execute([$role_name]);

?>