<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình web - Danh sách người dùng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
            background: white;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .pagination {
            margin-top: 20px;
        }
        .pagination a {
            margin: 0 5px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            text-decoration: none;
            color: black;
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
        <h3>Danh sách user</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <th>{{ $user->name }}</th>
                    
                    <th>{{ $user->email }}</th>
                    <th>{{ $user->phone }}</th>
                    <th>{{ $user->address }}</th>
                    <th>
                        <a href="{{ route('user.view1', ['id' => $user->id]) }}">View</a> |
                        <a href="{{ route('user.updateUser1', ['id' => $user->id]) }}">Edit</a> |
                        <a href="{{ route('user.deleteUser1', ['id' => $user->id]) }}">Delete</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
            <a href="#">Previous</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Next</a>
        </div>
    </div>
</body>
</html>
