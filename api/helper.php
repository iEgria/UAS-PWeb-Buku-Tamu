<?php

function response($data, $status = '1')
{
    echo json_encode(
        [
            'status' => $status,
            'data' => $data
        ]
    );
}
