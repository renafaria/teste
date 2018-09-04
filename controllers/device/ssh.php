<?php

//if (isset($_POST)) {

//    $server = $_POST['ip_field'];
//    $username = $_POST['user_field'];
//    $password = $_POST['password_field'];
//
//    $connection = ssh2_connect($server, 80);
//
//    ssh2_auth_password($connection, $username, $password);
//
//    $stream = ssh2_exec($connection, 'pwd');
//// Sets blocking mode on the stream
//    stream_set_blocking($stream, true);
//// Get the response of the executed command in a human readable form
//    $output = stream_get_contents($stream);
//}



$plaintext = "message to bevvvvvvvvvvvvvvvvv encrypted meu fio";
$cipher = "aes-256-cbc";
if (in_array($cipher, openssl_get_cipher_methods()))
{
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $key = 'chamafio';
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);

//echo $ivlen;
    echo 'estou encriptado fio: '.$ciphertext."\n\n";
    //store $cipher, $iv, and $tag for decryption later
    $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
    echo $original_plaintext."\n";
}