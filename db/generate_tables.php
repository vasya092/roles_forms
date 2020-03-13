<?
require_once 'database.php';

# Table creation
DB::query("CREATE TABLE user (id int auto_increment primary key, username varchar(24))");

?>