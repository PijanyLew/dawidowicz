<?php
require_once '3.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$ID=$_POST['ID'];

$query = "SELECT * FROM gatunki WHERE ID = $ID";
$result = $conn->query($query);

if (!$result) die($conn->error);
$rows = $result->num_rows;

if ($rows==0)
{
echo "<h1> NIE MA REKORDU W TABELI Z ID = ".$ID."</h1>";
}
else {
    $row = $result->fetch_array(MYSQLI_ASSOC);
   print ' <form name="form1" method="post" action="6.php">
  ID: <input type="number" required type="number" name="ID" value="'.$row['ID'].'" size="5" maxlength="5">
  ocena: <input type="text" name="ocena" value="'.$row['ocena'].'" size="20"     maxlength="20">
  <input type="submit"  name="wyslane" value="AKTUALIZUJ">
  </form>';
}

?>