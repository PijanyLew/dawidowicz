<?php
require_once '3.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$ID=$_POST['ID'];
$ocena=$_POST['ocena'];


$query ="UPDATE  gatunki SET ID='$ID', ocena='$ocena'  WHERE ID='$ID' " ;

$result = $conn->query($query);
if (!$result) die ("Brak dostępu do bazy danych: " . $conn->error);
echo "Połączenie z bazą OK ! :" .$result;
echo"<br>";
echo "Zaktualizowano rekord: " .$query;
echo"<br>";
echo "Do bazy : " .$db;
echo"<br>";
?>