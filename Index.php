<?php
if (!defined('BASE_URL')) define('BASE_URL', '/ChatGPTSample/');
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ChatGPT Sample</title>
  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💍</text></svg>">
  <style>
    body{font-family:system-ui,Segoe UI,Roboto,Arial,sans-serif;margin:0;padding:40px;background:#fafafa}
    .card{max-width:640px;margin:auto;padding:24px;border:1px solid #eee;border-radius:14px;box-shadow:0 10px 30px rgba(0,0,0,.06);background:#fff}
    .btn{display:inline-block;padding:10px 16px;border:1px solid #ddd;border-radius:10px;text-decoration:none}
    code{background:#f3f3f3;padding:2px 6px;border-radius:6px}
  </style>
</head>
<body>
  <div class="card">
    <h1>ChatGPT Sample OK ✅</h1>
    <p>BASE_URL: <code><?=BASE_URL?></code></p>
    <p><a class="btn" href="<?=BASE_URL?>api/hello.php">Test JSON API</a></p>
  </div>
</body>
</html>
