<?php 

require '../models/models.php';

$news=get_news();

echo json_encode($news);

?>
