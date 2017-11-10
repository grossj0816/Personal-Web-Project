<?php

$dsn = 'mysql:host=localhost;dbname=personalproj';
$username = 'root';
$password = '';

try
{
  $db = new PDO($dsn, $username, $password);
}
catch (PDOException $e) {
  $errorMsg = $e->getMessage();
  include ('../views/error_page_files/error.php');
  exit();
}

?>
