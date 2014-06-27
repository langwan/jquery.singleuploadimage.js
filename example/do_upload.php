<?php
header('Content-type: application/json');

move_uploaded_file($_FILES['img']['tmp_name'], 'upload.png');

echo json_encode(array('code' => 0, 'url' => 'upload.png'));