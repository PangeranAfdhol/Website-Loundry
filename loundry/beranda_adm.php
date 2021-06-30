<div class="container">
        <div class="navbar-header-">
              <?php if (isset($_SESSION['username'])) { ?>
                  <p align="right"><strong><?=$_SESSION['username']?></strong> | <?=$_SESSION['ket']?></p>
            <?php  } else {

            }?>

        </div>

<div class="container">
    <div class="row">
        <!--colomn kedua-->
        <div class="col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="font-family:'Cambria'; font-weight:bold;">Administrator Pangeranafdhol Laundry</h3>
                </div>
                <div class="panel-body">
                     <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                       <thead>
                          <p align="center"><img src="img/loundry.png" width="400px;" style="border-radius:20px;"></p>

                         </thead>


                    </table>
                </div>
            </div>
        </div>
</div>
