<?php
    session_start();
    // Kiểm tra xem có thông báo lỗi không
    $login_error = isset($_SESSION["login_error"]) ? $_SESSION["login_error"] : "";
    // Xóa thông báo lỗi sau khi hiển thị nó
    unset($_SESSION["login_error"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
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
            background-color: rgba(255, 255, 255, 0.2);
        }

        .button-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }

        button[type="reset"] {
            background-color: #f44336;
            color: white;
        }

        button:hover {
            background-color: rgba(0, 0, 0, 0.4);
        }

        a {
            text-decoration: none;
            color: white;
        }

        .button-row button[type="submit"] a {
            color: white;
        }
    </style>
</head>
<body>
    <h3>Đăng nhập</h3>

    <?php if (!empty($login_error)) { ?>
                <!-- hiển thị nội dung của biến $login_error. -->
        <p style="color: red; text-align: center;"><?php echo $login_error; ?></p> 
    <?php } ?>

    <form action="login_submit.php" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td class="button-row">
                    <button type="submit" name="submit">Login</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="dangky"><a href="register.php">Đăng ký</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
