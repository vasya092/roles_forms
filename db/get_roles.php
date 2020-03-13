<?php
require_once 'db.php';

$query = DB::run("SELECT * FROM user_role");
$data = array();
while ($row = $query->fetch(PDO::FETCH_OBJ))
{
    $data[] = $row; 
}
 echo json_encode($data);

?>