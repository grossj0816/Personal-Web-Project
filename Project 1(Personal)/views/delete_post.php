<?php

$val1 = trim(filter_input(INPUT_POST, 'demon', FILTER_SANITIZE_STRING));

require_once ('../models/database.php');

$stmt = $db->prepare("DELETE FROM userposts WHERE PostID = :v1");

$stmt->bindParam(':v1', $val1);

$stmt->execute();

header("Location: blog_list");

?>
