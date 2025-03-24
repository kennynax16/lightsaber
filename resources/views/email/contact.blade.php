<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новое сообщение</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        .content {
            font-size: 16px;
            line-height: 1.5;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Новое сообщение с контактной формы</h2>

    <div class="content">
        <p><strong>Имя:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Сообщение:</strong></p>
        <p>{{ nl2br(e($data['message'])) }}</p>
    </div>

    <div class="footer">
        <p>Отправлено с сайта Lightsaber</p>
    </div>
</div>

</body>
</html>
