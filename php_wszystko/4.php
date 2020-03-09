<?php
require_once '3.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT * FROM gatunki";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
$result->data_seek($j);
$row = $result->fetch_array(MYSQLI_ASSOC);
echo 'ID: ' . $row['ID'] . '<br>';
echo 'tytul: ' . $row['tytul'] . '<br><br>';
}
$result->close();
$conn->close();
?>