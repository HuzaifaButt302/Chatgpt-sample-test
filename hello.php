<?php
header('Content-Type: application/json; charset=utf-8');
echo json_encode([
  'ok' => true,
  'message' => 'Hello from API',
  'time' => date('c')
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
