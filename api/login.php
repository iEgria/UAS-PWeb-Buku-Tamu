<?php

require('helper.php');

$user = json_decode(file_get_contents('db/login.json'), true);

$post = $_POST;

if ($post) {
    if (isset($post['username']) && isset($post['password'])) {
        if ($post['username'] == '' || $post['password'] == '') {
            response('Username dan Password harus diisi', 0);
        } else if ($post['username'] == $user['username'] && $post['password'] == $user['password']) {
            response('Berhasil Login');
        } else {
            response('Username dan Password Salah', 0);
        }
    }
}
