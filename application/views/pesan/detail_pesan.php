<div class="container-fluid">
	<section class="content-header">
		<h1>Detail Pesan</h1>
	</section>
	 <nav aria-label="breadcrumb">
   	    <ol class="breadcrumb">
   	      <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>pesan">Pesan</a></li>
   	      <li class="breadcrumb-item active" aria-current="page">Detail Pesan</li>
   	    </ol>
   	  </nav>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">Form Detail Pesan</h6>
      	</div>
		<div class="card">
		  <div class="card-body">
			<form>
				<div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">Email :</label>
					<div class="col-sm-9">
						<input type="text" name="email" class="form-control" value="<?= $dpesan['email']; ?>" id="email" placeholder="Isi Email" readonly>
					</div>
				</div>
				<div class="form-group row">
					<label for="date" class="col-sm-3 col-form-label">Tanggal Dikirim :</label>
					<div class="col-sm-9">
						<input type="text" name="date" class="form-control" value="<?= date('d F Y H:i:s', $dpesan['date_sent']); ?>" id="date" placeholder="Tanggal Dikirim" readonly>
					</div>
				</div>
				<div class="form-group row">
					<label for="nama" class="col-sm-3 col-form-label">Nama :</label>
					<div class="col-sm-9">
					<input type="text" name="nama" class="form-control" value="<?= $dpesan['nama']; ?>" id="nama" placeholder="Isi Nama" readonly>
				</div>
				</div>
				<div class="form-group row">
					<label for="subjek" class="col-sm-3 col-form-label">Subjek :</label>
					<div class="col-sm-9">
					<input type="text" name="subjek" class="form-control" value="<?= $dpesan['subjek']; ?>" id="subjek" placeholder="subjek" readonly>
				</div>
				</div>
				<div class="form-group row">
					<label for="isipesan" class="col-sm-3 col-form-label">Isi Pesan :</label>
					<div class="col-sm-9">
					<textarea type="text" name="dashboard" class="form-control" value="<?= $dpesan['isipesan']; ?>" id="dashboard" placeholder="Isi Pesan" rows="7" cols="50" readonly><?= $dpesan['isipesan']; ?></textarea>
				</div>
				</div>
				<div class="modal-footer">
					<a href="<?= base_url(); ?>pesan" class="btn btn-primary mt-2">Kembali</a>
			    </div>
			</form>
		</div>
	</div>
</div>
</div>