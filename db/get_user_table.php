<?php
require_once 'db.php';

$query = DB::run("SELECT user.username, user_role.rolename FROM user INNER JOIN user_role ON user.role_id = user_role.id;");
$data = array();
while ($row = $query->fetch(PDO::FETCH_OBJ))
{
    $data[] = $row; 
}
 echo json_encode($data);

?>