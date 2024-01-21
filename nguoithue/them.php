<?php
    $sql_brand = "SELECT * FROM tenants";
    $query_brand = mysqli_query($connect, $sql_brand);

    if(isset($_POST['sbm'])){
        $name = $_POST['name'];

        $phone = $_POST['phone'];
        $r_number = $_POST['r_number'];
        $r_amount = $_POST['r_amount'];
        $co_date = $_POST['co_date'];

        $sql = "INSERT INTO tenants (name, phone, r_number, r_amount, co_date)
        VALUES ('$name', $phone, $r_number, $r_amount, '$co_date')";
        $query = mysqli_query($connect, $sql);
        header('location: renter.php?page_layout=danhsach');
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý người thuê trọ</title>
    <link rel="stylesheet" href="renter.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div id="header">
      <div class="header_1">
        <div class="header_left">Quản lý trọ cho thuê</div>
        <div class="header_right">
          <p>Admin</p>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="main_left">
        <a href="index.php">Dashboard</a>
        <a href="room.php">House Type</a>
        <a href="house.php">House</a>
        <a class="content1" href="renter.php">Tenants</a>
        <a href="baocao.php">Reports</a>
      </div>
      <div class="main_right">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2>Thêm khách hàng</h2>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Họ và tên</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input type="number" name="phone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Số phòng</label>
                            <input type="number" name="r_number" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Số tiền thuê</label>
                            <input type="text" name="r_amount" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Hạn thuê</label>
                            <input type="text" name="co_date" class="form-control" required>
                        </div>

                        <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
