<?php
$sql = "SELECT * FROM banner ORDER BY id DESC LIMIT 3";
$result = $mysqli->query($sql);

$bannerResult = convertResultToArray($result);