<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM tenants where id = $id";
    $query = mysqli_query($connect, $sql);
    header('location: renter.php?page_layout=danhsach');
?>