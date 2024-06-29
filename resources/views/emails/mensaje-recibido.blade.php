<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Recibido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
        .value {
            text-align: right;
        }
        .message-box {
            border: 1px solid #000;
            padding: 10px;
            height: 100px;
            overflow-y: auto;
            overflow-x: hidden;
            white-space: pre-wrap;
            text-align: left;
        }
        .message-content {
            margin-top: 0;
            word-break: break-word;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">Mensaje Recibido</div>
    <div class="row">
        <div class="label">Nombre:</div>
        <div class="value">{{ $mensaje['nombre'] ?? 'No disponible' }}</div>
    </div>
    <div class="row">
        <div class="label">Correo:</div>
        <div class="value">{{ $mensaje['email'] ?? 'No disponible' }}</div>
    </div>
    <div class="row">
        <div class="label">Asunto:</div>
        <div class="value">{{ $mensaje['asunto'] ?? 'No disponible' }}</div>
    </div>
    <div class="message-box">
        <div class="label">Mensaje:</div>
        <div class="message-content">{{ $mensaje['mensaje'] ?? 'No disponible' }}</div>
    </div>
</div>

</body>
</html>