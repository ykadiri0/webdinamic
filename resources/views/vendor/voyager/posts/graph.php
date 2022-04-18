
<?php
$conn = mysqli_connect("localhost", "root", "", "laravel");
$result = mysqli_query($conn, "SELECT COUNT(nom) from `personnelles`;");
$data2 = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data2, $row);
}
echo json_encode($data2);
exit();
?>