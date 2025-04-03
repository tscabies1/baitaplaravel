<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình web</title>
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
        input[type="text"], input[type="password"] {
            width: 100%;
            height: 30px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .remember {
            display: flex;
            align-items: center;
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
        <a href="#">Home</a> | <a href="#">Đăng nhập</a> | <a href="create1">Đăng ký</a>
    </div>
    <div class="container">
        <h3>Màn hình đăng nhập</h3>
        <form method="POST" action="{{ route('user.authUser1') }}">
        @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                           autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
            <div class="remember">
                <input type="checkbox"> Ghi nhớ đăng nhập
            </div>
            <a href="#">Quên mật khẩu</a>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</body>
</html>
