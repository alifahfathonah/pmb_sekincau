<h4>Periode <a href="<?=base_url()?>admin/tambah_periode" class="btn btn-danger">Tambah</a></h4><hr/>
<table class="table table-striped" id="table_periode">
	<thead>
		<tr>
			<th>No.</th>
			<th>Tahun Ajaran</th>
			<th>Keterangan</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no =1; foreach($data->result() as $periode){?>
		<tr>
			<td><?=$no++?>.</td>
			<td><?=$periode->ta?></td>
			<td><?=$periode->ket?></td>
			<td><?=$periode->status == '1' ? 'Aktif' : 'Tidak Aktif'?></td>
			<td>
				<a href="<?=base_url()?>admin/detail_periode/<?=$periode->idperiode?>" class="btn btn-warning btn-sm ">Detail</a> 
				<a href="<?=base_url()?>admin/pendaftar_di_periode/<?=$periode->idperiode?>" class="btn btn-success btn-sm">Pendaftar</a>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>