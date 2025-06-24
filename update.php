<?php
include('conn.php');
if (isset($_POST["update"])) {

    $id = $_POST["id"];
    $nama_pekerja = $_POST['nama_pekerja'];
    $no_kp = $_POST['no_kp'];
    $jantina = $_POST['jantina'];
    $no_hp= $_POST['no_hp'];

    $sql = "UPDATE datapekerja SET nama_pekerja = '$nama_pekerja', no_kp = '$no_kp', jantina = '$jantina', no_hp = '$no_hp' WHERE id = '$id'";
    
    if (mysqli_query($conn, $sql)) {
        header("Location:user.php");
    } else {
        die("Terdapat masalah.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>UPDATE MAKLUMAT</title>
    <style>
        body{
            background-color: aliceblue;
        }
        .submit{
            text-align: center;
        }
        .kp{
            width: 600px;
            height: 50px;
            border-radius: 6px;
            margin-left: 150px;
        }
        
        .nama{
            width: 600px;
            height: 50px;
            border-radius: 6px;
            margin-left: 150px;
        }
        
        .tel{
            width: 600px;
            height: 50px;
            border-radius: 6px;
            margin-left: 150px;
        }
        
        .select{
            width: 600px;
            height: 50px;
            border-radius: 6px;
            margin-left: 150px;
        }
        .box{
            background-color: white;
            width: 900px;
            height: 400px;
            margin: auto;
            border-radius: 5px;
            border: 2px solid;
            padding-top: 20px;
        }
        h1{
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>UPDATE MAKLUMAT</h1>
            <div>
                <a href="user.php" class="btn btn-dark">Kembali</a>
            </div>
        </header>
        <form action="" method="POST">
            <?php
            if (isset($_GET['id'])) {
                include("conn.php");

                // Dapatkan ID dari URL
                $id = $_GET['id'];

                // Betulkan query
                $sql = "SELECT * FROM datapekerja WHERE id=$id";
                $result = mysqli_query($conn, $sql);

                // Semak jika rekod wujud
                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    ?>  

                    <div class="box">
                        
                    <div class="form-element my-4">
                    <input type="text" class="kp" name="no_kp" placeholder="No Kad Pengenalan:" value="<?php echo $row["no_kp"]; ?>" required>
                    </div>

                    <div class="form-element my-4">
                        <input type="text" class="nama" name="nama_pekerja" placeholder="NAMA:" value="<?php echo $row["nama_pekerja"]; ?>"required>
                    </div>

                    <div class="form-element my-4">
                    <input type="text" class="tel" name="no_hp" placeholder="No Telefon:" value="<?php echo $row["no_hp"]; ?>" required>
                    </div>

                    <div class="form-element my-4">
                        <select name="jantina" class="select" required>
                            <option value="" disabled selected>Jantina:</option>
                            <option value="Lelaki" <?php if($row["jantina"] == "Lelaki") { echo "selected"; } ?>>Lelaki</option>
                            <option value="Perempuan" <?php if($row["jantina"] == "Perempuan") { echo "selected"; } ?>>Perempuan</option>
                        </select>
                    </div>

                    <input type="hidden" value="<?php echo $id; ?>" name="id">

                    <div class="submit">
                        <input type="submit" name="update" value="Tambah pekerja" class="btn btn-success">
                    </div>

                    <?php
                } else {
                    echo "<h3>Data pekerja tidak wujud.</h3>";
                }
            } 

            ?>
            </div>
        </form>
    </div>
</body>
</html>