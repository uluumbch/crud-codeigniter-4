<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">


        <div class="row">
            <div class="col-12">
                <h2>Tambah Data Tugas</h2>
            </div>

            <div class="col-3">
                <form action="<?= base_url('/tambahdata') ?>" method="post">
                    <div class="mb-3">
                        <label for="nama_tugas" class="form-label">Nama Tugas</label>
                        <input type="text" class="form-control" id="nama_tugas" name="nama_tugas">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_tugas" class="form-label">Deskripsi Tugas</label>
                        <textarea class="form-control" id="deskripsi_tugas" rows="3" name="deskripsi_tugas"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">tambah</button>
                </form>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
</body>

</html>