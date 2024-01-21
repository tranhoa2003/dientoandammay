<?php
    session_start();
    if( !isset($_SESSION["user"]) ) {
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý người thuê trọ</title>
    <link rel="stylesheet" href="editRenter.css"/>
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
        <a  class="content1" href="renter.php">Tenants</a>
        <a href="baocao.php">Reports</a>
      </div>
      <div class="main_right">
        <div class="body-main">
        <div class="body-title">
            <i class="fa-solid fa-share-nodes"></i>
            <span>Thông tin người thuê</span>
          </div>
          <div class="body_main_edit_renter">
            <div class="form_edit_renter">
                <span class="nameRenter">Tên người thuê</span>
                <input type="input" class="input_inf" placeholder="Nhập tên người thuê...">
            </div>
            <div class="form_edit_renter">
                <span class="nameRenter">Số điện thoại</span>
                <input type="input" class="input_inf" placeholder="Nhập SĐT người thuê...">
            </div>
            <div class="form_edit_renter">
                <span class="nameRenter">Số phòng</span>
                <input type="input" class="input_inf" placeholder="Nhập số phòng người thuê...">
            </div>
            <div class="form_edit_renter input_date">
                <span class="nameRenter">Nhập hạn thuê phòng</span>
                <form action="inputDate">
                    <input name="inputDate" type="date">
                </form>
            </div>
            
            <!-- <div class="right_edit_renter">
            </div> -->

          </div>
          <div class="body-title">
            <div class="btn_add_new_renter">
              <button class="add_renter" name="add_renter" >
                  Hoàn thành
              </button>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </body>
</html>