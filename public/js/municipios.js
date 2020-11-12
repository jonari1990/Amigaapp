$("#dep_id").change(event => {
  if($('#dep_id').val() != "0"){
	  $('#municipio_id').removeAttr('disabled', 'disabled');
	    $.get(`municipios/${event.target.value}`, function(res, sta){
		$("#municipio_id").empty();
		$("#municipio_id").append(`<option value=''> Seleccione Un Municipio: </option>`);
		    res.forEach(element => {
			$("#municipio_id").append(`<option value=${element.id}> ${element.title} </option>`);
		});
	});}else{
          $('#municipio_id').attr('disabled', 'disabled');
	  	  $("#municipio_id").empty();
          $("#municipio_id").append(`<option value=''> Seleccione Un Municipio: </option>`);
        }
});