<?php
echo file_get_contents($f = 'img/pavka.jpg');
//header('Content-type:image/jpg');

/*header("Content-Type: application/octet-stream");
header('Content-Length: ' . filesize($f));
header('Content-Disposition: attachment; filename="calendar.jpg"');
*/