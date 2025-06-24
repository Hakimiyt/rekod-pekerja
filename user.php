<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAKLUMAT PEKERJA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-color: aliceblue;
        }
        h1{
            text-align: center;
        }
        li{
            list-style-type: none;
        }
        li a{
            width: 100px;
            background-color: white;
            text-decoration: none;
        }
        header{
            margin: auto;
            width: 100%;
            height: 50px;
            background-color: darkorange;

        }
        table{
            margin: auto;
            background-color: antiquewhite;
            border-style: solid;
        }
        /* .box{
            margin: auto;
            background-color: cadetblue;
        } */
        table td, table th{
            vertical-align:middle;
            text-align:right;
            padding:20px ;
            
        }
        
        #create{
            margin-left:40rem ;
            margin-top: 2px;
        }
    </style>
</head>
<body>
    <header>
            <a href="create.php" class="btn btn-dark" id="create" >ADD</a>
            <a href="index.php" class="btn btn-danger" id="login">LOG OUT</a>
        </div>
    </header>
    
    <form action="" method="POST">
    <div class="box">
    <h1>SENARAI PEKERJA</h1>
    <table style="width: 95%;" border="1">
    <tr>
        <th>ID</th>
        <th>NAMA PEKERJA</th>
        <th>NO KP</th>
        <th>NO HP</th>
        <th>JANTINA</th>
        <th>Tindakan</th>
    </tr>
    
    <?php  
        include('conn.php');
        $sql = "SELECT * FROM datapekerja";
        $pekerja = mysqli_query($conn, $sql);
                
        if ($pekerja ->num_rows > 0) {
        $count = 1;
        while ($data = $pekerja->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $count++; ?></td>
        <td><?php echo $data['nama_pekerja']; ?></td>
        <td><?php echo $data['no_kp']; ?></td>
        <td><?php echo $data['no_hp']; ?></td>
        <td><?php echo $data['jantina']; ?></td>
        <td>
        <a href="update.php?id= <?php echo $data['id'];?>" class="btn btn-success">Update</a>
        <a href="delete.php?id= <?php echo $data['id'];?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
        <?php
                 } } else{
                    echo "<tr><td colspan='10' class='text-center'>Tiada data ditemui.</td></tr>";
                }
                ?>
    </table>
    </div>
    </form>
</body>
</html>