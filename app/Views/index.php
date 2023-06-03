<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="pt-5 d-flex justify-content-between">
            <div class="col">
                <h1>Selamat Datang di website pencatatan tugas</h1>
            </div>
            <div class="">
                <a href="" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <!-- create list of books -->
        <div class="row">
            <div class="col-12">
                <h2>Daftar Tugas</h2>
                <a class="btn btn-success" href="<?= base_url('/tambahdata')?>">Tambah Data</a>
            </div>

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Tugas</th>
                            <th>Deskripsi Tugas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $row):?>
                            <tr>
                                <td><?= $row['nama_tugas'] ?></td>
                                <td><?= $row['deskripsi_tugas'] ?></td>
                                <td>
                                    <a href="<?= base_url('/editdata/'.$row['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <!-- <a href="" class="btn btn-sm btn-danger">Hapus</a> -->
                                    <form action="<?= base_url('/hapusdata/'.$row['id']) ?>" method="post" style="display: inline-block">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('apakah anda yakin?')">hapus</button>
                                    </form>
                                </td>
                            </tr>
                           <?php endforeach ?>
                        
                    </tbody>
                </table>
            </div>
                
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>