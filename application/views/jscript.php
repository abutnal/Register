$(document).ready(function(){
	$(document).on('submit', '#registerForm', function(event){
		event.preventDefault();
		$form = $(this);
		$.ajax({
			url: $form.attr('action'),
			type: $form.attr('method'),
			dataType: 'json',
			data: new FormData(this),
			contentType: false,
			processData: false,
			cache:false,
			success: function(response){

								// console.log(response);
								$.each(response, function(key, value){
									if(key=='status'){
										$('#message').html(value);
										$('#registerForm')[0].reset();
										$('.error').hide();
									}
									else{
										$('#input-' + key).parents('.form-group').find('.error').html(value);
									}
									// if ('#registerForm input'=='') {
									// 	$('#input-fname').focus();
									// 	}
								});
								
							}
						});
		$('#registerForm input').on('keyup', function () { 
			$(this).parents('.form-group').find('.error').html(" ");
		});
		$('#input-country').on('change', function () { 
			$(this).parents('.form-group').find('.error').html(" ");
		});
		$('#input-city').on('change', function () { 
			$(this).parents('.form-group').find('.error').html(" ");
		});
		

	});
});

$(document).ready(function(){
	$.ajax({
		url: '<?php echo base_url('agent/country');?>',
		method: 'post',
		data: {select_country:1},
		success:function(response){
			// console.log(response);
			$('#country_list').html(response);
		}
	});
});


$(document).ready(function(){
	$(document).on('change', '#input-country', function(){
		var code = $('#input-country').val();
		$.ajax({
			url:'<?php echo base_url('agent/location');?>',
			method: 'POST',
			data:{location:1,code:code},
			success:function(response){
						// console.log(response);
						$('#city_list').html(response);
					}
				}); 
	});
});