<?php
    if(isset($_POST['sbm'])){
        $r_number = $_POST['r_number'];

        $r_condition = $_POST['r_condition'];
        $price = $_POST['price'];
        $convenient = $_POST['convenient'];

        $sql = "INSERT INTO house_type (r_number, r_condition, price, convenient)
        VALUES ($r_number, '$r_condition', $price, '$convenient')";
        $query = mysqli_query($connect, $sql);
        header('location: room.php?page_layout=danhsach');
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="room.css"/>
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
        <a class="content1" href="room.php">House Type</a>
        <a href="house.php">House</a>
        <a href="renter.php">Tenants</a>
        <a href="baocao.php">Reports</a>
      </div>
      <div class="main_right">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2>Thêm loại phòng</h2>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Số phòng</label>
                            <input type="number" name="r_number" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Tình trạng phòng</label>
                            <input type="text" name="r_condition" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Giá thuê</label>
                            <input type="number" name="price" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="">Tiện nghi</label>
                            <input type="text" name="convenient" class="form-control" required>
                        </div>
                        <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>