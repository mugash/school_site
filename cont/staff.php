<?php

require '../models/models.php';
$staff=get_staff();
echo json_encode($staff);

?>
