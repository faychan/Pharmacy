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
            <h1 class="page-header">ADDING MEDICINE</h1>
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">MEDICINE FORM</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/meds/edit" role="form" >
                                <div class="form-group">
                                    <label>Medicine Code</label>
                                    <input type="text" id="code" name="code" class="form-control" value="<?php echo $dreg->id_obat; ?>"autofocus>
                                </div>
                                <div class="form-group">
                                     <label>Medicine's Title</label>
                                     <input id="title" type="text" name="title" class="form-control" value="<?php echo $dreg->nama_obat; ?>"autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input id="price" type="text" name="price" class="form-control" value="<?php echo $dreg->harga_obat; ?>"autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Indication</label>
                                    <input id="indication" type="text" name="indication" class="form-control" value="<?php echo $dreg->indikasi; ?>"autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input id="amount" type="number" name="amount" class="form-control" value="<?php echo $dreg->stok; ?>"autofocus>
                                    <p class="help-block">MUST BE NUMERIC</p>
                                </div>
                                
                                <input type="submit" name="submit" value="UPDATE MEDICINE" class="btn btn-primary">
                                <input type="submit" name="submit" href="<?php echo base_url(); ?>index.php/meds/record" value="BACK" class="btn btn-danger">
                            </form>
                        </div><!-- /.col-lg-6 (nested) -->
                    </div><!-- /.row (nested) -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
        </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
</div><!-- /#page-wrapper -->
