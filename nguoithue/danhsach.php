<?php
    $sql = "SELECT * FROM tenants";
    $query = mysqli_query($connect, $sql);

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
                    <h2>Danh sách người thuê phòng</h2>
                </div>

                <input type="text" id="searchName" placeholder="Tìm theo tên...">
                <input type="text" id="searchRoom" placeholder="Tìm theo số phòng...">
                <button onclick="search()">Tìm kiếm</button>

                <div class="card-body">
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Họ và tên</th>
                                <th>Số điện thoại</th>
                                <th>Số phòng</th>
                                <th>Số tiền thuê</th>
                                <th>Hạn thuê</th>         
                                <th>Sửa</th>
                                <th>Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                                while($row = mysqli_fetch_assoc($query)){?>
                                    <tr>
                                        <td><?php echo $i++?></td>
                                        <td><?php echo $row['name']; ?></td>

                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['r_number']; ?></td>
                                        <td><?php echo $row['r_amount']; ?></td>
                                        <td><?php echo $row['co_date']; ?></td>
                                        <td>
                                            <a href="renter.php?page_layout=sua&id=<?php echo $row['id']; ?>">Sửa</a>
                                        </td>
                                        <td>
                                            <a onclick="return Del('<?php echo $row['name'] ?>')" href="renter.php?page_layout=xoa&id=<?php echo $row['id']; ?>">Xoá</a>
                                        </td>

                                    </tr>
                                <?php } ?>
                        </tbody>
                </table>
                <a class="btn btn-primary" href="renter.php?page_layout=them">Thêm mới</a>
                </div>
            </div>
        </div>
        <script>
            function Del(name){
                return confirm("Bạn có chắc chắn muốn xoá khách hàng: " + name + "?");
            }
        </script>
        <script>
            function search() {
                var inputName = document.getElementById('searchName').value.toLowerCase();
                var inputRoom = document.getElementById('searchRoom').value.toLowerCase();
                var table = document.querySelector('.table');
                var rows = table.getElementsByTagName('tr');

                for (var i = 1; i < rows.length; i++) { // Bắt đầu từ 1 để bỏ qua hàng tiêu đề
                    var row = rows[i];
                    var name = row.getElementsByTagName('td')[1].textContent.toLowerCase();
                    var room = row.getElementsByTagName('td')[3].textContent.toLowerCase();

                    if (name.includes(inputName) && room.includes(inputRoom)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            }
        </script>
    </div>
  </body>
</html>