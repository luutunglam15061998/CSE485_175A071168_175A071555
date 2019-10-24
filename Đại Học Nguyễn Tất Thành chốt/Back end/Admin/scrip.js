
$(document).ready(function(){
	var mem_id;
	
	DisplayData();
	
	$('#update').hide();
	
	$('#save').on('click', function(){
		if($('#Ten').val() == "" || $('#Email').val() == "" || $('#Quyen').val() == ""){
			alert("Vui lòng nhập đầy đủ thông tin ");
		}else{
			var firstname = $('#Ten').val();
			var lastname = $('#Email').val();
			var address = $('#Quyen').val();
			
			$.ajax({
				url: 'save.php',
				type: 'POST',
				data: {
                    Ten: Ten,
					Email: Email,
                    Quyen: Quyen
				},
				success: function(data){
					 $('#Ten').val('');
					 $('#Email').val('');
					 $('#Quyen').val('');
					 DisplayData();
				}
			});
		}
		
	});
	
	function DisplayData(){
		$.ajax({
			url: 'data.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete', function(){
		var id = $(this).attr('name');
		
		$.ajax({
			url: 'delete.php',
			type: 'POST',
			data: {
				id: id
			},
			success: function(data){
				DisplayData();
				$('#update').hide();
				$('#save').show();	
				$('#Ten').val('');
				$('#Email').val('');
				$('#Quyen').val('');
			}
		});
	})
	
	$(document).on('click', '.edit', function(){
		var id = $(this).attr('name');
		
		$.ajax({
			url: 'edit.php',
			type: 'POST',
			data: {
				id: id
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				mem_id = getArray.mem_id;
				
				$('#Ten').val(getArray.firstname);
				$('#Email').val(getArray.lastname);
				$('#Quyen').val(getArray.address);
				
				$('#update').show();
				$('#save').hide();	
			}
		})
	});
	
	$('#update').on('click', function(){
		var Ten = $('#Ten').val();
		var Email = $('#Email ').val();
		var Quyen = $('#Quyen').val();
		
		
		$.ajax({
			url: 'update.php',
			type: 'POST',
			data: {
				id: mem_id,
                Ten: Ten,
                Email: Email,
                Quyen: Quyen
			},
			success: function(){
                DisplayData();
				$('#Ten').val('');
				$('#Email').val('');
				$('#Quyen').val('');
				
				alert("Successfully Updated!");
				
				$('#update').hide();
				$('#save').show();	
				
				mem_id = "";
			}
		});
	});
});