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
            <h1 class="page-header">LOG</h1>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Medicine Info</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/meds/add" role="form" >
                                <div class="form-group">
                                    <label>Medicine Code</label>
                                    <input type="text" name="code" class="form-control">
                                </div>
                                <div class="form-group">
                                     <label>Medicine's Title</label>
                                     <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                     <label>Supplier Name</label>
                                     <select class="form-control" name="obat">
            <?php
              foreach ($supplier as $sup) {
                echo '<option value="'.$sup->id_supplier.'">'.$sup->nama_sp.'</option>';
              }
             ?>
          </select>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Indication</label>
                                    <input type="text" name="indication" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="number" name="amount" class="form-control">
                                    <p class="help-block">MUST BE NUMERIC</p>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image " class="form-control">
                                    <p class="help-block">MUST BE NUMERIC</p>
                                </div>
                                
                                <input type="submit" name="submit" value="ADD MEDICINE" class="btn btn-primary">
                                <input type="reset" name="reset" value="RESET" class="btn btn-danger">
                            </form>
                        </div><!-- /.col-lg-6 (nested) -->
                    </div><!-- /.row (nested) -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
</div><!-- /#page-wrapper -->