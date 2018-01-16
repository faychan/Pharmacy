<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
        <br>
<?php
                if(!empty($announce)){
                    echo '<div class="alert alert-info">';
                    echo $announce;
                    echo '</div>';
                }
            ?>
            <h1 class="page-header">PURCHASEMENT</h1>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">SALE TRANSACTION</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/trans/purchase" role="form" >
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="id_penjualan" name="id_penjualan" class="form-control">
                                </div>
                                <div class="form-group">
                                     <label>Medicine's Title</label>
                                     <select class="form-control" name="obat">
            <?php
              foreach ($obat as $o) {
                echo '<option value="'.$o->id_obat.'">'.$o->nama_obat.'</option>';
              }
             ?>
          </select>
                                </div>
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="number" name="amount" class="form-control">
                                    <p class="help-block">MUST BE NUMERIC</p>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="keterangan">
                                        <option  value="resep">Prescription</option>
                                        <option  value="no_resep">Independent</option>
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="ADD MEDICINE" class="btn btn-primary">
                                <input type="reset" name="reset" value="RESET" class="btn btn-danger">
                            </form>
   </div><!-- /.col-lg-6 (nested) -->
                    </div><!-- /.row (nested) -->
                     </div><!-- /.panel-body -->
                          </div><!-- /.panel -->
                            <div class="col-lg-12">
    </div>
</div>
<!-- /.row -->

    <div class="col-lg-8 col-md-8">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Med's Title</th>
                    <th>Amount</th>
                    <th>Purpose</th>
                    <th>Per Unit</th>
                    <th>Date</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
                  foreach ($transaksi as $data) { //ngabsen data
              echo
              '<tr>
                  <td>'.$data->id_jual.'</td>
                  <td>'.$data->nama_obat.'</td>
                  <td>'.$data->qty.'</td>
                  <td>'.$data->keterangan.'</td>
                  <td>'.$data->harga_obat.'</td>
                  <td>'.$data->tanggal_jual.'</td>
                  <td>'.$data->qty*$data->harga_obat.'</td>
                  <td>
                  <a href="'.base_url().'index.php/admin/hapus_transaksi/'.$data->id_jual.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                  </td>
              </tr>';
              }
              ?>
            </tbody>
        </table>
                     
               
       
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
</div><!-- /#page-wrapper -->