
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Organisasi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table  width="70%" cellspacing="2" cellpadding="5">
             <form action="" method="post">
					<input type="text" name="nis" value="<?php echo $this->uri->segment(3); ?>" hidden/>
				<?php foreach($rows as $row) { ?>
                <tr>
                    <td>Nama Organisasi</td>
                    <td>:</td>
                    <td><input type="text" name="nama" class="form-control form-control-user" value="<?php echo $row->nama_org ?>" /></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><input type="text" name="tahun" class="form-control form-control-user" value="<?php echo $row->tahun ?>"/></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><input type="text" name="jabatan" class="form-control form-control-user" value="<?php echo $row->jabatan ?>"/></td>
                </tr>
				<?php } ?> 				 
                <tr>
                <td style="color:#ee5253"><b>Pastikan Data diatas benar.</b></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                <td>
                    <b><input  type="button" class="btn btn-danger" name="Batal" value="BATAL" onclick="javascript:history.go(-1);"/></b>
                    <b><input type="submit" class="btn btn-success" name="btnSubmit" value="SIMPAN"/></b>
                </td>
            </tr>
</form>
</table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
