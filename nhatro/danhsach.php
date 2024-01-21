<?php
    $sql = "SELECT * FROM house";
    $query = mysqli_query($connect, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồ án</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="baocao.js"></script>
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
            <div class="header_left">
                Quản lý trọ cho thuê
            </div>
            <div class="header_right">
                <p>Admin</p>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="main_left">
            <a href="index.php">Dashboard</a>
            <a href="room.php">House Type</a>
            <a class="content1" href="house.php">House</a>
            <a href="renter.php">Tenants</a>
            <a href="baocao.php">Reports</a>
        </div>
        <div class="main_right">

            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h2>Danh sách phòng <i class="fa-solid fa-house"></i></h2>            
                    </div>

                    <input type="text" id="searchInput" placeholder="Nhập số phòng">
                    <button onclick="searchRoom()">Tìm kiếm</button>

                    <div class="card-body">
                    <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Số phòng</th>
                                    <th>Ngày hợp đồng</th>
                                    <th>Tiền cọc</th>
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
                                            <td><?php echo $row['d_contract']; ?></td>
                                            <td><?php echo $row['deposits']; ?></td>
                                            <td>
                                                <a href="house.php?page_layout=sua&id=<?php echo $row['id']; ?>">Sửa</a>
                                            </td>
                                            <td>
                                                <a onclick="return Del('<?php echo $row['r_number'] ?>')" href="house.php?page_layout=xoa&id=<?php echo $row['id']; ?>">Xoá</a>
                                            </td>

                                        </tr>
                                    <?php } ?>
                            </tbody>
                    </table>
                    <a class="btn btn-primary" href="house.php?page_layout=them">Thêm mới</a>
                    </div>
                </div>
            </div>
            <script>
                function Del(name){
                    return confirm("Bạn có chắc chắn muốn xoá phòng: " + name + "?");
                }
            </script>
            <script>
                // Hàm thực hiện tìm kiếm
                function searchRoom() {
                    var input = document.getElementById('searchInput').value.toLowerCase(); // Lấy giá trị từ ô input và chuyển thành chữ thường
                    var table = document.querySelector('table'); // Lấy bảng

                    // Lặp qua từng dòng của bảng, bắt đầu từ hàng 1 (loại bỏ hàng tiêu đề)
                    for (var i = 1, row; row = table.rows[i]; i++) {
                        var roomNumber = row.cells[1].innerText.toLowerCase(); // Lấy số phòng trong dòng hiện tại

                        // Kiểm tra xem số phòng hiện tại có chứa chuỗi tìm kiếm không
                        if (roomNumber.includes(input)) {
                            row.style.display = ''; // Hiển thị dòng nếu phù hợp
                        } else {
                            row.style.display = 'none'; // Ẩn dòng nếu không phù hợp
                        }
                    }
                }
            </script>
        </div>
    </div>
</body>
</html>