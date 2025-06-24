<?php 
    include ('conn.php');
     if (isset($_POST['create'])){ 
      $nama_pekerja = $_POST['nama_pekerja'];
      $no_kp = $_POST['no_kp'];
      $jantina = $_POST['jantina'];
      $no_hp= $_POST['no_hp'];
      
      $sql = "INSERT INTO `datapekerja` (nama_pekerja, no_kp, jantina, no_hp) VALUES ('$nama_pekerja','$no_kp','$jantina','$no_hp')";
      
      $result = mysqli_query($conn, $sql);
      
      if ($result){
        header("Location:user.php");
        exit();
      }
      else {     
        echo "Something went wrong ". mysqli_error($conn);
      }
    }
?>