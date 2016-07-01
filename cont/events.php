<?php 

require "../models/models.php";
$events=get_events();

echo json_encode($events);
?>
