<div class="container">

<hr>
<button class="btn btn-link" data-toggle="modal" data-target="#tambahDataModal"><span class="glyphicon glyphicon-plus"></span> Tambah Data Penduduk</button> 
<hr>


<?php
$i = 1;

if ($total==null) {
	echo "<p> no records found! </p>";
} else {
?>

<table class="table table-striped table-responsive">
	<thead>
		<tr>
			<td>No</td>
			<td>Gambar</td>
			<td>NIK</td>
			<td>Nama</td>
			<td>Tempat/Tgl Lahir</td>
			<td>Jenis Kelamin</td>
			<td>Alamat</td>
			<td>Aksi</td>
		</tr>
	</thead>
	<tbody>

<?php
foreach ($penduduk as $row) {
$newdate = date("d-m-Y", strtotime($row['tanggal_lahir']));
?>

		<tr>
			<td><?=$i?></td>
			<td>
				<img src="<?=base_url()?>assets/uploads/<?=$row['path_img']?>" class="img-responsive img-thumbnail">
			</td>
			<td><?=$row['nik']?></td>
			<td><?=$row['nama']?></td>
			<td><?=$row['tempat_lahir']?>, <?=$newdate?></td>
			<td><?=$row['jenis_kelamin']?></td>
			<td><?=$row['alamat']?></td>
			<td>
				<button type="button" class="btn btn-success tombol"
				data-toggle="modal"
				data-target="#editDataModal"
				data-id="<?=$row['id']?>"
				data-nik="<?=$row['nik']?>"
				data-nama="<?=$row['nama']?>"
				data-tempat="<?=$row['tempat_lahir']?>"
				data-tanggal="<?=$row['tanggal_lahir']?>"
				data-jkelamin="<?=$row['jenis_kelamin']?>"
				data-alamat="<?=$row['alamat']?>"
				data-path="<?=$row['path_img']?>"
				data-baseurl="<?=base_url()?>"
				><span class="glyphicon glyphicon-pencil"></span></button>

				<button type="button" class="btn btn-danger tombol"
				data-toggle="modal"
				data-target="#hapusDataModal"
				data-id="<?=$row['id']?>"
				data-nama="<?=$row['nama']?>"
				data-path="<?=$row['path_img']?>"
				data-baseurl="<?=base_url()?>"
				><span class="glyphicon glyphicon-trash"></span></button>
			</td>
		</tr>

<?
$i++;	
}
?>

	</tbody>
</table>

<?php } ?>
</div>