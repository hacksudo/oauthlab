<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require "jwt.php";

if (isset($_POST['token'])) $_SESSION['token'] = $_POST['token'];
if (isset($_GET['token'])) $_SESSION['token'] = $_GET['token'];

if (!isset($_SESSION['token'])) die("Not logged in.");

$token = $_SESSION['token'];
$payload = decode_jwt($token);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<style>
    body {
        background: linear-gradient(120deg, #000000, #1a1a1a);
        color: #39ff14;
        font-family: 'Courier New', monospace;
        padding: 40px;
        text-align: center;
    }
    h1 {
        font-size: 42px;
        text-shadow: 0 0 10px #39ff14, 0 0 20px #00ff99;
    }
    p {
        font-size: 20px;
    }
    .token-box {
        background: rgba(0, 0, 0, 0.7);
        border: 2px solid #39ff14;
        padding: 20px;
        margin: 30px auto;
        width: 80%;
        color: #00ffcc;
        word-wrap: break-word;
        border-radius: 12px;
        box-shadow: 0 0 15px #00ff99;
    }
    .flag {
        background: black;
        color: #ff0033;
        font-size: 28px;
        padding: 20px;
        border: 2px dashed #ff0033;
        margin-top: 30px;
        box-shadow: 0 0 20px #ff0033, 0 0 40px #ff3355;
        display: inline-block;
        border-radius: 10px;
        animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
</style>
</head>
<body>
    <h1>👨‍💻 Welcome, <?php echo htmlspecialchars($payload['user']); ?></h1>
    <p>Your role: <strong><?php echo htmlspecialchars($payload['role']); ?></strong></p>
    <div class="token-box">
        <h3>Your JWT Token:</h3>
        <p><?php echo htmlspecialchars($token); ?></p>
    </div>
    <?php if ($payload['role'] === "admin") { ?>
        <div class="flag">🎉 FLAG: oauth_bypass_success_123 🎉</div>
    <?php } ?>
<center><p>www.hacksudo.com</p></center>
</body>
</html>
