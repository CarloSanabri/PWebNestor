<?php

header("Content-Type: application/json; charset=UTF-8");

$config = require "config.php";

$pageId = $config["page_id"];
$token = $config["access_token"];
$limit = $config["limit"];

$url = "https://graph.facebook.com/v25.0/$pageId/feed?fields=message,created_time,full_picture,permalink_url&limit=$limit&access_token=$token";

$options = [
    "http" => [
        "ignore_errors" => true
    ]
];

$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);

echo $response;