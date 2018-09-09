<h4>Pendaftar</h4><hr/>
<table class="table table-striped" id="table_pendaftar">
	<thead>
		<tr>
			<th>No</th>
			<th>Nomor Pendaftaran</th>
			<th>Nama</th>
			<th>Status Pendaftaran</th>
			<th>Status Pembayaran</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no =1; foreach($data->result() as $value){?>
		<tr>
			<td><?=$no++?>.</td>
			<td><?=$value->nodaftar?></td>
			<td><?=$value->namasiswa?></td>
			<td>
				<?php 
				if($value->statusdaftar == '0'){
					echo 'Menunggu Verifikasi';
				}else if($value->statusdaftar == '1'){
					echo 'Ter-Verifikasi';
				}else if($value->statusdaftar == '2'){
					echo 'Diterima';
				}else if($value->statusdaftar == '3'){
					echo 'Ditolak';
				}
				?>
					
			</td>
			<td>
				<?php 
				$get = $this->db->get_where('pembayaran', array('nodaftar' => $value->nodaftar));
				echo $get->row()->status
				?>
			</td>
			<td>
				<a href="<?=base_url()?>admin/detail_pendaftar/<?=$value->nodaftar?>" class="btn btn-warning btn-sm">Detail</a>
				<a href="<?=base_url()?>admin/bukti_bayar_pendaftar/<?=$value->nodaftar?>" class="btn btn-success btn-sm">Bukti Bayar</a>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>