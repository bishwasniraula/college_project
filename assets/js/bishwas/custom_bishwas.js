$(document).ready(function(){

	$('.loginGoBtn').on('click',function(event){
		var username=$('.user-name').val();
		var password=$('.user-password').val();
		if(username==""){
			event.preventDefault();
			$('.loginFormInput .user-name').css('border','2px solid rgb(251, 103, 103)');
			$('.loginFormInput .user-name').focus();
		}else{
			$('.loginFormInput .user-name').css('border','');
			if(password==""){
				$('.loginFormInput .user-password').css('border','2px solid rgb(251, 103, 103)');
				$('.loginFormInput .user-password').focus();
				event.preventDefault();	
			}
			else{
				$('.loginFormInput .user-password').css('border','');
				// $.ajax({
				// 	type:"POST",
				// 	url:site_url+'index.php/Home/user_login',
				// 	data:{'username':username,'password':password},
				// 	success:function(result){
				// 		alert(result);
				// 	}
				// });
			}
		}

		
	});

} );