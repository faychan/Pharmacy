<br>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">Medicine Records</div>
            <div class="panel-body">
                <table border="0" cellpadding="4" cellspacing="0" class="datatable table table-striped table-bordered">
                    <tr>
                        <th>Num.</th>
                        <th>Code</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Indication</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    	$no = 0;
                    	foreach ($obat as $data) {
                    		echo '
                    			<tr>
                    				<td>'.++$no.'</td>
                    				<td>'.$data->id_jual.'</td>
                    				<td>'.$data->tanggal_jual.'</td>
                    				<td>'.$data->keterangan.'</td>
                                    <td>'.$data->qty.'</td>
                                    <td>'.$data->id_obat.'</td>
                    				<td>
                    					<a href="' .base_url().'index.php/meds/log/'.$data->id_obat.'" class="btn btn-info btn-sm">
                    						<i class="glyphicon glyphicon-search"></i>
                    					Lihat</a>
                                        <a href="' .base_url().'index.php/admin/ed/'.$data->id_obat.'" class="btn btn-info btn-sm">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        Edit</a>
                    					<a href="' .base_url().'index.php/admin/del/'.$data->id_obat.'" class="btn btn-danger btn-sm">
                    						<i class="glyphicon glyphicon-trash"></i>
                    					Hapus</a>
                    				</td>
                    			<tr>
                    		';
                    	}
                    ?>
                </table>
        <!--Display Page -->
            </div>
        </div>
        <a style="display: block; margin: 0px auto;" href="<?php echo base_url(); ?>index.php/admin/logout/" class="btn btn-danger btn-sm">
                                        Logout</a>
    </div>
</div>
<br>

