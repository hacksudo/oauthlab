<?php
session_start();
if ($_GET['response_type'] === 'code' && $_GET['client_id'] === 'demo') {
    $redirect = $_GET['redirect_uri'];
    $state = $_GET['state'];
    header("Location: $redirect?code=demo123&state=$state");
    exit;
}
die("Invalid OAuth request.");
