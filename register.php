<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý trọ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://png.pngtree.com/thumb_back/fw800/background/20230617/pngtree-illustration-design-of-a-target-achievement-concept-for-user-interface-or-image_3630945.jpg");
        }

        h3 {
            text-align: center;
            color: white;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: rgba(255, 255, 255, 0.1);
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .button_row button:first-child{
            position: relative;
        }
        .button_row button:last-child{
            position:absolute;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left: 28%;
        }

        button[type="reset"] {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left: 10px;
        }
        button:hover{
            background-color: rgba(0, 0, 0, 0.4);
        }
        button a:hover{
            color: black;
        }

        a {
            text-decoration: none;
            color: #4CAF50;
        }

        button[type="submit"] a {
            color: white;
        }
    </style>
</head>
<body>
    <h3>Đăng ký</h3>
    <form action="register_submit.php" method="post">
        <table>
            <tr>
                <td>Tên đăng nhập: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu: </td>
                <td><input type="password" name="repassword"></td>
            </tr>
            <tr>
                <td class="button_row">
                    <button type="submit" name="submit">Đăng ký</button>
                    <button type="reset">Làm mới</button>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="dangnhap"><a href="login.php">Đăng nhập</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
