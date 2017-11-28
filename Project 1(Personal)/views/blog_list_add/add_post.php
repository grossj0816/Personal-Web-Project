<?php

$val1 = trim(filter_input(INPUT_POST, 'dragon', FILTER_SANITIZE_STRING));
$val2 = trim(filter_input(INPUT_POST, 'tiger', FILTER_SANITIZE_STRING));
$val3 = trim(filter_input(INPUT_POST, 'wolf', FILTER_SANITIZE_STRING));
$val4 = trim(filter_input(INPUT_POST, 'lion', FILTER_SANITIZE_STRING));

if (empty($val1) || empty($val2) || empty($val3) || empty($val4))
{
  $error = "A field value is empty!!!!!!";
}
  require_once '../../models/database.php';

  $stmt = $db->prepare("INSERT INTO userposts (FirstName, LastName, Console, FavGameDesc)
                        VALUES(:fname, :lname, :console, :favgamedesc)");


  $stmt->bindValue(":fname", $val1);
  $stmt->bindValue(":lname", $val2);
  $stmt->bindValue(":console", $val3);
  $stmt->bindValue(":favgamedesc", $val4);

  $stmt->execute();


  header("Location: ../blog_list");


?>
