<?php
header('Content-Type: application/json; charset=utf-8');

require('../helper.php');

echo json_encode(
    [
        'data' =>  json_decode(file_get_contents('../db/buku_tamu.json'), true),
    ]
);
