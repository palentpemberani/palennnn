<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="website icon" type="jpg" href="logo_kopi.png">

</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Pesanan</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM kopi where Id_pelanggan='$_GET[edit]'");
                ?>
                <?php
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="koneksi.php" method="POST">
                        <div class="form-group">
                            <label for="Id_Pelanggan">ID pesanan</label>

                            <input type="text" class="form-control mb-3" autocomplete="off" name="Id_Pelanggan" value="<?= $row['Id_Pelanggan'] ?>" readonly required>

                        </div>
                        <div class="form-group">
                            <label for="NmPesanan">Nama customer</label>

                            <input type="text" class="form-control mb-3" autocomplete="off" name="NmPesanan" value="<?= $row['NmPesanan'] ?>" required>

                        </div>
                        <div class="form-group">

                            <label for="Jp">Jenis pesanan</label>
                            <div class="form-check">

                                <input type="radio" class="form-check-input" name="Jp" value="makanan" <?php if (($row['Jp']) === "makanan") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>> makanan
                            </div>

                            <div class="form-check">

                                <input type="radio" class="form-check-input" name="Jp" value="minuman" <?php if (($row['Jp']) === "minuman") {
                                                                                                                        echo "checked";
                                                                                                                    } ?>> minuman
                            </div>
                            <div class="form-group">
                                <label for="Harga">Harga</label>

                                <input type="text" class="form-control mb-3" autocomplete="off" name="Harga" value="<?= $row['Harga'] ?>" required>

                            </div>

                            <div class="form-group mt-3">

                                <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>