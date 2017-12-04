<?php

$val1 = trim(filter_input(INPUT_POST, 'demon', FILTER_VALIDATE_INT));
$val2 = trim(filter_input(INPUT_POST, 'god', FILTER_SANITIZE_STRING));
$val3 = trim(filter_input(INPUT_POST, 'lion', FILTER_SANITIZE_STRING));
$val4 = trim(filter_input(INPUT_POST, 'tiger', FILTER_SANITIZE_STRING));
$val5 = trim(filter_input(INPUT_POST, 'bunny', FILTER_SANITIZE_STRING));

if (empty($val2) || empty($val3) || empty($val4) || empty($val5))
{
  include '../errors/index.php';
}
else
{
  require_once ('../../models/database.php');

  $stmt = $db->prepare("UPDATE userposts
    SET FirstName = :fname, LastName = :lname, Console = :console, FavGameDesc = :fgdesc
     WHERE PostID = :v1");

  $stmt->bindValue(':v1', $val1);
  $stmt->bindValue(':fname', $val2);
  $stmt->bindValue(':lname', $val3);
  $stmt->bindValue(':console', $val4);
  $stmt->bindValue(':fgdesc', $val5);

  $stmt->execute();

  header("Location: ../blog_list");
}

?>
