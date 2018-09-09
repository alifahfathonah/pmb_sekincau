<h4>Tambah Periode</h4><hr/>
<form method="POST" action="<?=base_url()?>admin/proses_tambah_periode">
	<table class="table table-striped">
		<tr>
			<td>Tahun Ajaran</td>
			<td>
				<input type="text" name="ta" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>
				<input type="text" name="keterangan" class="form-control">
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<select name="status" class="form-control">
					<option value="">--pilih--</option>
					<option value="1">Aktif</option>
					<option value="0">Tidak Aktif</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn btn-success">Simpan</button>
			</td>
		</tr>
	</table>
</form>