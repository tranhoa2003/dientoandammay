<?php
    $id = $_GET['id'];


    $sql_up = "SELECT * FROM house where id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $r_number = $_POST['r_number'];

        $d_contract = $_POST['d_contract'];
        $deposits = $_POST['deposits'];

        $sql = "UPDATE house SET r_number = '$r_number', d_contract = '$d_contract', deposits = '$deposits' WHERE id = $id";

        $query = mysqli_query($connect, $sql);
        header('location: house.php?page_layout=danhsach');
    }
?>

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
                        <h2><i class="fa-solid fa-house"></i> Sửa phòng</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Số phòng <i class="fa-solid fa-hashtag"></i></label>
                                <input type="text" name="r_number" class="form-control" required value="<?php echo $row_up['r_number']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Ngày hợp đồng <i class="fa-solid fa-calendar-days"></i></label>
                                <input type="text" name="d_contract" class="form-control" required value="<?php echo $row_up['d_contract']; ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Tiền cọc <i class="fa-solid fa-money-bill"></i></label>
                                <input type="number" name="deposits" class="form-control" required value="<?php echo $row_up['deposits']; ?>">
                            </div>
                           
                            <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>