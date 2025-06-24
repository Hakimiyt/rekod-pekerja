<?php
    if (isset($_GET['id'])) {
        include("conn.php");
        $id = $_GET['id'];

        $sql = "DELETE FROM datapekerja WHERE id ='$id'";
    if(mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION["delete"] = "Data pekerja berjaya dibuang!";
        header("Location:user.php");
        exit;
    } else {
        die("Terdapat masalah semasa membuang data pekerja!");
    } 
}
    else {
        echo "Data pekerja tidak wujud";
    }
?>