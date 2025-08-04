<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$_SESSION['state'] = '12345';
$server_ip = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>OAuth Bypass Lab</title>
<style>
    body {
        background: radial-gradient(circle at top, #000000, #0f2027);
        color: #00ff99;
        font-family: 'Courier New', monospace;
        text-align: center;
        padding-top: 100px;
        overflow: hidden;
    }
    h1 {
        font-size: 48px;
        text-shadow: 0 0 10px #00ff99, 0 0 20px #00ffcc;
        animation: glow 2s infinite alternate;
    }
    @keyframes glow {
        from { text-shadow: 0 0 5px #00ff99; }
        to { text-shadow: 0 0 20px #00ffcc, 0 0 30px #00ff99; }
    }
    a {
        color: #ff0033;
        font-size: 22px;
        padding: 15px 30px;
        border: 2px solid #ff0033;
        border-radius: 12px;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 0 10px #ff0033;
        display: inline-block;
        margin-top: 40px;
    }
    a:hover {
        background: #ff0033;
        color: white;
        transform: scale(1.1);
        box-shadow: 0 0 20px #ff0033, 0 0 40px #ff3355;
    }
    .matrix {
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: transparent;
        pointer-events: none;
        color: rgba(0,255,0,0.2);
        font-size: 18px;
        animation: matrix 20s linear infinite;
    }
    @keyframes matrix {
        from { transform: translateY(-100%); }
        to { transform: translateY(100%); }
    }
</style>
</head>
<body>
    <div class="matrix">1010101011010101101010101</div>
    <h1>🔐 OAuth Bypass Lab | Hacksudo</h1>
    <p>Welcome to the hacking simulation.<br>Try to bypass OAuth and escalate your role!</p>
    <a href="http://<?php echo $server_ip; ?>/oauth_provider.php?response_type=code&client_id=demo&redirect_uri=http://<?php echo $server_ip; ?>/callback.php&state=<?php echo $_SESSION['state']; ?>">
       Login with Fake OAuth
    </a>
<center><p>www.hacksudo.com</p></center>
</body>
</html>
