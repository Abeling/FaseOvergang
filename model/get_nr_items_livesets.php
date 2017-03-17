<?php
$sql = "SELECT * FROM dj_has_year_has_party";
$result = $mysqli->query($sql);

$total_nr_livesets = $result->num_rows;