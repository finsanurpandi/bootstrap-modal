$(document).on("click", '.tombol', function(e){
	var id = $(this).data('id');
	var nik = $(this).data('nik');
	var nama = $(this).data('nama');
	var tempat = $(this).data('tempat');
	var tanggal = $(this).data('tanggal');
	var jkelamin = $(this).data('jkelamin');
	var alamat = $(this).data('alamat');
	var path = $(this).data('path');
	var baseurl = $(this).data('baseurl');

	$(".id").val(id);
	$(".nik").val(nik);
	$(".nama").val(nama);
	$(".tempatLahir").val(tempat);
	$(".tanggalLahir").val(tanggal);
	$(".path").val(path);
	
	if (jkelamin == "Laki-Laki") {
		$("#lakilaki").attr('checked', true);
	} else if (jkelamin == "Perempuan") {
		$("#perempuan").attr('checked', true);
	};

	$('.alamat').html("<textarea class=\"form-control\" name=\"alamat\" required>" +alamat+"</textarea>");

	$(".text-delete").text("Apakah anda yakin akan menghapus data dengan nama " + nama + "?");

	$(".view-image").html("<img src=\"" + baseurl +"assets/uploads/" + path + "\" width=\"30%\" class=\"img-thumbnail\">");


})