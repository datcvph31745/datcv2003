<?php

require 'vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$qrCode = QrCode::create('https://github.com/datcvph31745');
$writer = new PngWriter();
$result = $writer->write($qrCode);

// Xuất ảnh QR code dưới dạng base64
$base64 = base64_encode($result->getString());
?>
<!DOCTYPE html>
<html>

<head>
    <title>QR Code</title>
</head>

<body>
    <h1>Mã QR của bạn:</h1>
    <img src="data:image/png;base64, <?= $base64 ?>" alt="QR Code">
</body>

</html>