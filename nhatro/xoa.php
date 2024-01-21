<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM house where id = $id";
    $query = mysqli_query($connect, $sql);
    header('location: house.php?page_layout=danhsach');
?>
