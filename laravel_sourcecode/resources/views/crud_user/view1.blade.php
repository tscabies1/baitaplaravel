<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình web - Chi tiết người dùng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
        }
        .info {
            text-align: left;
            margin-bottom: 15px;
        }
        button {
            background-color: blue;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            cursor: pointer;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <h2>Lập trình web</h2>
    <div>
        <a href="#">Home</a> | <a href="login1">Đăng xuất</a>
    </div>
    <div class="container">
        <h3>Màn hình chi tiết</h3>
        <div class="info">
            <strong>Username:</strong> {{$messi->name}}
        </div>
        <div class="info">
            <strong>Email:</strong> {{$messi->email}}
        </div>
    </div>
</body>
</html>
