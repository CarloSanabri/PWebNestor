<?php

header("Content-Type: application/json; charset=UTF-8");

$config = require "config.php";

$pageId = $config["page_id"];
$token  = $config["access_token"];
$limit  = $config["limit"];

$url = "https://graph.facebook.com/v23.0/$pageId/posts?fields=message,created_time,full_picture,permalink_url&limit=$limit&access_token=$token";

$response = @file_get_contents($url);

if ($response === false) {

    $error = error_get_last();

    echo json_encode([
        "php_error" => $error
    ], JSON_PRETTY_PRINT);

    exit;

}

echo $response;