<?php
    $sql = "SELECT * FROM house_type";
    $query = mysqli_query($connect, $sql);
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
                    <h2>Danh sách loại phòng</h2>
                </div>

                <!-- tìm kiếm -->
                <select id="searchCondition">
                    <option value="">Tất cả</option>
                    <option value="Trống">Phòng trống</option>
                    <option value="Đã thuê">Đã thuê</option>
                </select>
                <input type="number" id="searchPrice" placeholder="Tìm kiếm giá phòng...">
                <button onclick="search()">Tìm kiếm</button>

                <!-- -------------------------------------------- -->

                <div class="card-body">
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Số phòng</th>
                                <th>Tình trạng phòng</th>
                                <th>Giá thuê</th>
                                <th>Tiện nghi</th>
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
                                        <td><?php echo $row['r_number']; ?></td>

                                        <td><?php echo $row['r_condition']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td><?php echo $row['convenient']; ?></td>
                                        <td>
                                            <a href="room.php?page_layout=sua&id=<?php echo $row['id']; ?>">Sửa</a>
                                        </td>
                                        <td>
                                            <a onclick="return Del('<?php echo $row['r_number'] ?>')" href="room.php?page_layout=xoa&id=<?php echo $row['id']; ?>">Xoá</a>
                                        </td>

                                    </tr>
                                <?php } ?>
                        </tbody>
                </table>
                <a class="btn btn-primary" href="room.php?page_layout=them">Thêm mới</a>
                </div>
            </div>
        </div>
        <script>
            function Del(name){
                return confirm("Bạn có chắc chắn muốn xoá phòng số: " + name + "?");
            }
        </script>

        <!-- Tìm kiếm -->
        <script>
            function search() {
                var selectedCondition = document.getElementById('searchCondition').value;
                var inputPrice = parseFloat(document.getElementById('searchPrice').value);
                var table = document.querySelector('.table');
                var rows = table.getElementsByTagName('tr');

                for (var i = 1; i < rows.length; i++) { // Bắt đầu từ 1 để bỏ qua hàng tiêu đề
                    var row = rows[i];
                    var condition = row.getElementsByTagName('td')[2].textContent;
                    var price = parseFloat(row.getElementsByTagName('td')[3].textContent);

                    var conditionMatch = selectedCondition === "" || condition.toLowerCase() === selectedCondition.toLowerCase();
                    var priceMatch = isNaN(inputPrice) || price === inputPrice;

                    if (conditionMatch && priceMatch) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            }
        </script>
        <!-- ----------------------------------------- -->
    </div>
  </body>
</html>