<?php
require_once '3.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$ID1=$_POST['ID1'];
$ID2=$_POST['ID2'];

$query = "DELETE FROM gatunki WHERE ID IN ($ID1, $ID2)" ;
        
$result = $conn->query($query);
if (!$result) die ("Brak dostępu do bazy danych : " . $conn->error);

echo "Połączenie z bazą OK ! : " .$result;
echo"<br>";
echo"<br>";
echo "Usunięto rekord : " .$query;
echo"<br>";
echo"<br>";
echo "Z bazy  : " .$db;
echo"<br>";
?>