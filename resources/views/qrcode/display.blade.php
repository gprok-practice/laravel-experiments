<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Laravel QR Code Example</title>
</head>
<body>

<div class="text-center" style="margin-top: 50px;">
    <h3>Laravel QRCode Example</h3>

    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate($id)) !!} ">

    <p>ID: {{ $id }}</p>
</div>

</body>
</html>
