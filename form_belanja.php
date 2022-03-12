<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row mb-4 bg-warning py-0">
            <div class="col-md-12">
                <h2 class="text-center my-3">
                    Belanja Online
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="form_belanja.php" method="POST">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card-o"></i>
                                    </div>
                                </div>
                                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="Televisi">
                                <label for="produk_0" class="custom-control-label">Televisi</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="Kulkas">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="Mesin Cuci">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-adjust"></i>
                                    </div>
                                </div>
                                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="submit" name="kirim" value="kirim" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header bg-info text-white text-center">
                        Daftar Harga
                    </h5>
                    <div class="card-body">
                        <p class="card-text">
                            Televisi : 4.200.000
                        </p>
                        <p class="card-text">
                            Kulkas : 3.100.000
                        </p>
                        <p class="card-text">
                            Mesin Cuci : 3.800.000
                        </p>
                    </div>
                    <div class="card-footer bg-info text-white text-center">
                        Harga Dapat Berubah Setiap Saat
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header bg-info text-white text-center">
                        Pesanan Anda
                    </h5>
                    <div class="card-body">
                        <?php

                        $proses = $_POST["kirim"];
                        if (!empty($proses)) {

                            $customer = $_POST['customer'];
                            $produk = $_POST['produk'];
                            $jumlah = $_POST['jumlah'];
                        }

                        echo '<p class="card-text"> Nama Customer : ' . $customer;
                        echo '<p class="card-text"> Pilihan Produk : ' . $produk;
                        echo '<p class="card-text"> Jumlah Produk : ' . $jumlah;                        
                       
                        if ($produk == "Televisi") {
                            $total = intval($jumlah) * 4200000;
                            echo '<p class="card-text"> Total Belanja : ' . $total;
                        } 
                        elseif ($produk == "Kulkas") {
                            $total = intval($jumlah) * 3100000;
                            echo '<p class="card-text"> Total Belanja : ' . $total;
                        }
                        elseif ($produk == "Mesin Cuci") {
                            $total = intval($jumlah) * 3800000;
                            echo '<p class="card-text"> Total Belanja : ' . $total;
                        }
                        else{
                            $total = " ";
                            echo '<p class="card-text"> Total Belanja : ' .$total;
                        }
                        
                        ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>