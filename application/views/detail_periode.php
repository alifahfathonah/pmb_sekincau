<h4>Detail Periode</h4><hr/>
<form method="POST" action="<?=base_url()?>admin/proses_update_periode">
	<table class="table table-striped">
		<tr>
			<td>Tahun Ajaran</td>
			<td>
				<input type="hidden" name="id_periode" value="<?=$idperiode?>">
				<input type="text" name="ta" class="form-control" value="<?=@$data->row()->ta?>">
			</td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>
				<input type="text" name="keterangan" class="form-control" value="<?=@$data->row()->ket?>">
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<select name="status" class="form-control">
					<option value="">--pilih--</option>
					<option value="1" <?=$data->row()->status == '1' ? 'selected' : ''?>>Aktif</option>
					<option value="0" <?=$data->row()->status == '0' ? 'selected' : ''?>>Tidak Aktif</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn btn-success">Update</button>
			</td>
		</tr>
	</table>
</form>