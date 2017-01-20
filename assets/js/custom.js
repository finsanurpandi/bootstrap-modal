$(document).on("click", '.tombol', function(e){
	var id = $(this).data('id');
	var nim = $(this).data('nim');
	var nama = $(this).data('nama');
	var pass = $(this).data('pass');
	var kelas = $(this).data('kelas');

	$(".id").val(id);
	$(".nim").val(nim);
	$(".nama").val(nama);
	$(".pass").val(pass);
	$(".kelas").val(kelas);

	$(".text-delete").text("Apakah anda yakin akan menghapus data dengan nama " + nama);
})