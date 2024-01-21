<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM house_type where id = $id";
    $query = mysqli_query($connect, $sql);
    header('location: room.php?page_layout=danhsach');
?>