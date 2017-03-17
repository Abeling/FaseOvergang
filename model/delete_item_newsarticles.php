<?php
// $sql = "DELETE * FROM newsarticles WHERE id = " . $id;
$sql = "DELETE FROM `schoolcheck`.`scholen` WHERE `scholen`.`id` = $id";
$mysqli->query($sql);
