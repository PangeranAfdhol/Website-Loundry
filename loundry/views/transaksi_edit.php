<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM penumpang WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">UPDATE Data Penumpang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="noRak" class="col-sm-3 control-label">No. Registrasi</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_registrasi" value="<?=$data['no_registrasi']?>"class="form-control" placeholder="Nomor Registrasi">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noLaci" class="col-sm-3 control-label">No. Plat</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_plat" value="<?=$data['no_plat']?>"class="form-control" placeholder="Nomor Plat Bus">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noBoks" class="col-sm-3 control-label">Nama Penumpang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_penumpang" value="<?=$data['nama_penumpang']?>"class="form-control" placeholder="Nama Penumpang">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Tujuan</label>
                            <div class="col-sm-9">
                                <input type="text" name="tujuan" value="<?=$data['tujuan']?>"class="form-control" placeholder="Tujuan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="para_pihak" class="col-sm-3 control-label">Tanggal Berangkat</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_berangkat" value="<?=$data['tanggal_berangkat']?>"class="form-control">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="noPerkara" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>"class="form-control" placeholder="Harga Tiket" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status_pembayaran" class="form-control" style="width:160px;">
									<option value=""><?=$data['status_pembayaran']?></option>
									<option value="Lunas">Lunas</option>
									<option value="Bayar Ditempat">Bayar Ditempat</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> UPDATE Data Penumpang</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=penumpang&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penumpang
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $no_res=$_POST['no_registrasi'];
	$no_plat=$_POST['no_plat'];
	$nama_penumpang=$_POST['nama_penumpang'];
	$tujuan=$_POST['tujuan'];
    $tanggal_berangkat=$_POST['tanggal_berangkat'];
    $harga=$_POST['harga'];
    $status=$_POST['status_pembayaran'];
    //buat sql
    $sql="UPDATE penumpang SET no_registrasi='$no_res',no_plat='$no_plat',nama_penumpang='$nama_penumpang',tujuan='$tujuan',tanggal_berangkat='$tanggal_berangkat',harga='$harga',status_pembayaran='$status' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=penumpang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



