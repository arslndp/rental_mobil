/* --------------------------------- */
		$('#popup').hide();	
		$('.shadow').hide();
		$('#popupEdit').hide();
/* --------------------------------- */


	
/* --------------------------------- */
function popupView() 
{
	$(".shadow").fadeIn();
	$("#popup").fadeIn();
}

function closePoup()
{
	$('#popup').fadeOut();
	$('.shadow').fadeOut();
	$("#popupEdit").fadeOut();
}

function EditSopir(id,nms,almt,tlp,sim,trf)
{


	$('#e_id').val(id);
	$('#e_nama').val(nms);
	$('#e_alamat').val(almt);
	$("#e_telp").val(tlp);
	$('#e_sim').val(sim);
	$('#e_trf').val(trf);



	$('.shadow').fadeIn();
	$('#popupEdit').fadeIn();
}

function EditKaryawan(id,nms,almt,tlp,user,type)
{
	$("#e_id").val(id);
	$("#e_nama").val(nms);
	$("#e_alamat").val(almt);
	$("#e_telp").val(tlp);
	$("#e_user").val(user);
	$("#e_type").val(type);

	$(".shadow").fadeIn();
	$("#popupEdit").fadeIn();
}

function EditMobil(noplat,idtyp,kdmrk,thn,sts,tpj)
{
	$("#plt").val(noplat);
	$("#thn").val(thn);
	$("#tpj").val(tpj);
	$("#sts").val(sts);
	$("#tmbl").val(idtyp);
	$("#mrk").val(kdmrk);

	$(".shadow").fadeIn();
	$("#popupEdit").fadeIn();
}