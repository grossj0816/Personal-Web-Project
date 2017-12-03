<?php

$sLook = intval(($_GET['query']));

require_once '../../models/database.php';

$stmt = $db->prepare("SELECT * FROM tblgamesellers WHERE SellerID = :sid");

$stmt->bindValue(":sid", $sLook);

$stmt->execute();

$row = $stmt->fetch();
echo
"<table>
  <tr>
    <th>Seller Name</th>
    <th>Open Time</th>
    <th>Close Time</th>
    <th>Address</th>
    <th>Store Description</th>
  </tr>";

  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['OpenTime'] . "</td>";
  echo "<td>" . $row['CloseTime'] . "</td>";
  echo "<td>" . $row['Location'] . "</td>";
  echo "<td>" . $row['StoreDesc'] . "</td>";
  echo "</tr>";


echo "</table>";
?>
