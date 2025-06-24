<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>ADD MAKLUMAT</title>
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
            margin-left: 500px;
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <header class="d-flex justify-content-between my-4">
            <h1>ADD MAKLUMAT</h1>
            <div>
                <a href="user.php" class="btn btn-dark">Kembali</a>
            </div>
        </header>

        <form action="create_process.php" method="POST">   
            <div class="box">
            <div class="form-element my-4">
                <input type="text" class="kp" name="no_kp" placeholder="No Kad Pengenalan:" required>
            </div>

            <div class="form-element my-4">
                <input type="text" class="nama" name="nama_pekerja" placeholder="NAMA:" required>
            </div>

            <div class="form-element my-4">
                <input type="text" class="tel" name="no_hp" placeholder="No Telefon:" required>
            </div>

            <div class="form-element my-4">
                <select name="jantina" id="jantina" class="select">
                    <option value="" disabled selected>Pilih jantina</option>
                    <option value="Lelaki">Lelaki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="submit">
                <input type="submit" name="create" value="Tambah pekerja" class="btn btn-success">
            </div>
            </div>
        </form>
    </div>
</body>
</html>