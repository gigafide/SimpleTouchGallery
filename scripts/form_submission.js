
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
// ADD EVENT LISTENER TO THE FORM TO WATCH FOR SUBMIT BUTTON CLICK //
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

$(document).ready(function (e){
	//SUBMIT FORM DATA THROUGH AJAX
	$("#config_form").on('submit',function(e){
		e.preventDefault();
		var formData = new FormData(this);
		
		$.ajax({
			type:'Post',
			url:'process.php',
			data: formData,
			//dataType: 'json',
			success: function(data){
				alert(data);
				window.open('http://10.14.19.96/index.php', '_blank').focus();
			},
			cache: false,
			contentType: false,
			processData: false
		});
	});
});
	
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
// ADD EVENT LISTENER TO THE FORM TO WATCH FOR VIEW BUTTON CLICK //
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//

document.getElementById("view_button").addEventListener("click", function (e) {
	e.preventDefault();
	var previewData = new FormData(document.getElementById("config_form"));
	$.ajax({
		type:"POST",
		url: "temp.php",
		data: previewData,
		success: function(data){
			alert(data);
			window.open('http://10.14.19.96/testing.php', '_blank').focus();
		},
		cache: false,
		contentType: false,
		processData: false
	});
});