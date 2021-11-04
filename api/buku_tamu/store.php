<?php

header('Content-Type: application/json; charset=utf-8');

require('../helper.php');

$post = $_POST;
$tamus = json_decode(file_get_contents('../db/buku_tamu.json'), true);

if ($post) {
    if (isset($post['nama']) && isset($post['keperluan'])) {
        if ($post['nama'] == '' || $post['keperluan'] == '') {
            response('nama dan keperluan harus diisi', 0);
        } else {
            $tamus[] = [
                "id" => $tamus[count($tamus) - 1]['id'] + 1,
                "tanggal" => date('Y-m-d H:i:s'),
                "nama" => $post['nama'],
                "Keperluan" => $post['keperluan'],
            ];
            file_put_contents('../db/buku_tamu.json', json_encode($tamus));
            response('Data Berhasil Disimpan');
        }
    }
}
