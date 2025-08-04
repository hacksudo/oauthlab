<?php
function decode_jwt($jwt) {
    $parts = explode('.', $jwt);
    if (count($parts) < 2) return [];
    return json_decode(base64_decode($parts[1]), true);
}
