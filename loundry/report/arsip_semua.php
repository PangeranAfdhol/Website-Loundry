<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Transaksi</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Pangeran Loundry </h2>
                        <h4>Jl. Jawa Gg Kelapa No. 28, Duri <br> Kabupaten Bengkalis - Riau, 28784</h4>
                        <hr>
                        <h3>DATA SELURUH TRANSAKSI </h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <thead>
                            <tr>
                                <th>No.</th>    
                                <th>No. Antrian</th>
                                <th>Nama </th>
                                <th>Alamat</th>
                                <th>Tanggal</th>
                                <th>Jumlah </th>
                                <th>Deterjen</th>
                                <th>Harga</th>
                                <th>Total </th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM transaksi";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_antrian'] ?></td>
									<td><?= $data['nama'] ?></td>
									<td><?= $data['alamat'] ?></td>
									<td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['jumlah_kg'] ?></td>
                                    <td><?= $data['jenis_deterjen'] ?></td>
                                    <td><?= $data['harga'] ?></td>
                                    <td><?= $data['total_harga'] ?></td>
                                    <td><?= $data['status_pembayaran'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="10" class="text-right">
                                        Duri  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Pangeran Afdhol <strong>
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>