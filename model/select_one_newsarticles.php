<?php

$sql = "SELECT * FROM scholen WHERE id = " . $id;
$result = $mysqli->query($sql);
$result = convertResultToArray($result);
?>
