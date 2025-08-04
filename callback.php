<?php
session_start();
if ($_GET['code'] === 'demo123') {
    // issue fake JWT
    $header = base64_encode('{"alg":"none","typ":"JWT"}');
    $payload = base64_encode('{"user":"victim","role":"user"}');
    $jwt = "$header.$payload.";
    $_SESSION['token'] = $jwt;
    header("Location: dashboard.php");
    exit;
}
die("OAuth failed.");

