<?php
include 'conn.php';
$data = array();
$sql = "SELECT * from 'discussion' ORDER BY id desc";
$result = $conn->query($sql);
while($row = $result->fetch()){
     array_push ($data, $row);
    array_push ($data);
}
echo json_encode($data);
$conn = null;
exit();
?>