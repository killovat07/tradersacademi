<?php
if ($_POST) {

    $data = [
        'status' => 'success',
    ];

    echo json_encode($data);

    die();    
}
?>
