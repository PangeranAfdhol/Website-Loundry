<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Penumpang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Antrian</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_antrian" class="form-control" placeholder="IL-X" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Pelanggan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_kg" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Deterjen</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="jenis_deterjen" class="form-control">
									<option value="">---</option>
									<option value="So Klin">So Klin</option>
                                    <option value="Rinso">Rinso</option>
                                    <option value="Molto">Molto</option>
                                    <option value="Boom">Boom</option>
                                    <option value="Daia">Daia</option>
                                    <option value="Vanis">Vanis</option>
								</select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Harga Rp.</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" placeholder="Harga" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Total Harga Rp.</label>
                            <div class="col-sm-9">
                                <input type="text" name="total_harga" class="form-control"  placeholder="Total Harga" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status Pembayaran</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status_pembayaran" class="form-control">
									<option value="">---</option>
									<option value="Lunas">Lunas</option>
									<option value="Bayar Diawal">Bayar Diawal</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> SIMPAN</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penumpang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Transaksi
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $no_antrian=$_POST['no_antrian'];
	$nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tanggal=$_POST['tanggal'];
	$jumlah=$_POST['jumlah_kg'];
    $deterjen=$_POST['jenis_deterjen'];
    $harga=$_POST['harga'];
    $total=$harga['harga']*$jumlah;
    $total=$_POST['total_harga'];
    $status=$_POST['status_pembayaran'];
    //buat sql
    $sql="INSERT INTO transaksi VALUES ('','$no_antrian','$nama','$alamat','$tanggal','$jumlah','$deterjen','$harga','$total','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=transaksi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
