<h4>Bukti bayar pendaftar</h4><hr/>
<!-- <form method="POST" action="<?=base_url()?>profil/proses_upload_bukti_bayar" enctype="multipart/form-data"> -->
<form action="<?=base_url()?>admin/proses_verifikasi_bukti_bayar" method="POST">
	<table class="table table-striped">
		<tr>
			<td>Bukti Bayar</td>
			<td>
				<input type="hidden" name="idpendaftar" id="idpendaftar" value="<?=$idpendaftar?>">
				<input type="file" name="bukti_bayar" class="form-control" required />
				<?php if(@$data->row()->nama_file !== NULL){?>
				<a href="<?=base_url()?>upload/<?=@$data->row()->nama_file?>" target="_blank">lihat Bukti Bayar Yang Sudah Diupload</a>
				<?php }?>
			</td>
		</tr>
		<tr>
			<td>Jumlah Bayar</td>
			<td>
				<input type="number" name="jumlah_bayar" class="form-control" value="<?=@$data->row()->jumlah?>" required/>
			</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>
				<textarea name="keterangan" class="form-control" required><?=@$data->row()->keterangan?></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Verifikasi
			</td>
			<td>
				<select class="form-control" name="verifikasi_bukti_bayar">
					<option value="">--pilih--</option>
					<option value="Ter-Verifikasi" <?=@$data->row()->status == 'Ter-Verifikasi' ? 'selected' : ''?>>Ter-Verifikasi</option>
					<option value="Ditolak" <?=@$data->row()->status == 'Ditolak' ? 'selected' : ''?>>Ditolak</option>
				</select>
				<!-- <button class="btn btn-primary" type="submit" required>Upload</button> -->
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				
				<button class="btn btn-primary" type="submit" required>Simpan</button>
			</td>
		</tr>
	</table>
</form>