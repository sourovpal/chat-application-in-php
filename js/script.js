$(document).ready(function(){

	//  login system 

	$('#login_form').submit(function(e){
		e.preventDefault();
		var formData = $(this).serialize();
		var username = $('#username').val();
		var password = $('#password').val();
		if(username == "")
		{
			$('#username').css('border-color', 'red');
		}
		else
		{
			$('#username').css('border-color', '#00e2ae');
		}
		if(password == "")
		{
			$('#password').css('border-color', 'red');
		}
		else
		{
			$('#password').css('border-color', '#00e2ae');
		}
		if(username !="" && password != "")
		{
			$.ajax({
				url:'php_login.php',
				method:'post',
				data:formData,
				success:function(data)
				{
					if(data == "NOT")
					{
						$('#username').css('border-color', 'red');
						$('#password').css('border-color', 'red');
					}
					else
					{
						$('#login_form')[0].reset();
						setInterval(function(){
							window.location.href="index.php";
							window.location.href="index.php";
						},2000);
					}
				}
			});
		}
	});


	fetch_user();

	setInterval(function(){
		update_last_activity();
		fetch_user();
	}, 5000); 

// fetch user 

	function fetch_user()
	{
		$.ajax({
			url:"fetch_user.php",
			method:"post",
			success:function(data)
			{
				$('#user_details').html(data);
			}
		});
	}

// update last activity 


function update_last_activity()
{
	$.ajax({
		url:"update_last_activity.php",
		// method:'post',
		success:function(data)
		{
			
		}
	});
}


// Make chat dialog box

function make_chat_dialog_box(to_user_id, to_user_name)
{
var modal_content ='<div id="user_dialog_'+to_user_id+'" calss="user_dialog" title="You have chat with '+to_user_name+'">';
	modal_content +='<div style="height:350px;border:1px solid #ccc;overflow-y:scroll;margin-bottom:24px;padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history'+to_user_id+'">';
	modal_content +=fetch_chat_message(to_user_id);
	modal_content +=notification_seen(to_user_id);
	modal_content +='</div>';
	modal_content +='<div class="form-group">';
	modal_content +='<textarea data-touserid="'+to_user_id+'" name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control is_type" placeholder="Type your message....."></textarea>';
	modal_content +='</div><div class = "form-group" align="right">';
	modal_content +='<button type="button" name="send_chat" id="'+to_user_id+'" class = "btn btn-info send_chat">Send</button></div></div>';
	$("#user_modal_details").html(modal_content);
 }

// dilog show


 $(document).on('click', '.start_chat', function(){
 	var to_user_id = $(this).data('touserid');
 	var to_user_name = $(this).data('tousername');
 	make_chat_dialog_box(to_user_id, to_user_name);
 	$('#user_dialog_'+to_user_id).dialog({
 		autoOpen:false,
 		width:400
 	});
 	$('#user_dialog_'+to_user_id).dialog('open');



 });

// insert message

$(document).on('click', '.send_chat', function(){
	var to_user_id = $(this).attr('id');
	var chat_message = $('#chat_message_'+to_user_id).val();
	if(chat_message.length == "")
	{
		$('#chat_message_'+to_user_id).css('border-color', 'red');
	}
	else
	{
		$.ajax({
			url:"insert_chat.php",
			method:"post",
			data:{to_user_id:to_user_id, chat_message:chat_message},
			success:function(data)
			{
				$('#chat_message_'+to_user_id).val('');
				$('#chat_history'+to_user_id).html(data);

			}
		});
	}

});

// fetch_chat_message.php

function fetch_chat_message(to_user_id)
{

 		$.ajax({
			url:"fetch_chat_message.php",
			method:"post",
			data:{to_user_id:to_user_id},
			success:function(data)
			{
				$('#chat_history'+to_user_id).html(data);
			}
		});
}

function update_chat_history_data()
{
	$('.chat_history').each(function(){
		var to_user_id = $(this).data('touserid');
		fetch_chat_message(to_user_id);
	});
}
setInterval(function(){
	update_chat_history_data();
	fetch_user();
},1000);




// notification_seen.php


function notification_seen(to_user_id)
{
 		$.ajax({
			url:"notification_seen.php",
			method:"post",
			data:{to_user_id:to_user_id},
			success:function(data)
			{
				
			}
		});
}


// is type  update_type_status.php

$(document).on('focus', '.is_type', function(){
	var is_type = 'yes';
	var to_user_id = $(this).data('touserid');
	notification_seen(to_user_id);
	$.ajax({
			url:"update_type_status.php",
			method:"post",
			data:{is_type:is_type, to_user_id:to_user_id},
			success:function(data)
			{
			
			}
		});
});


$(document).on('keyup', '.is_type', function(){
	var is_type = 'yes';
	var to_user_id = $(this).data('touserid');
	notification_seen(to_user_id);
	$.ajax({
			url:"update_type_status.php",
			method:"post",
			data:{is_type:is_type, to_user_id:to_user_id},
			success:function(data)
			{
			
			}
		});
});

// $(document).on('blur', '.is_type', function(){
// 	var is_type = 'no';
// 	var to_user_id = $(this).data('touserid');
// 	notification_seen(to_user_id);
// 	$.ajax({
// 			url:"update_type_status.php",
// 			method:"post",
// 			data:{is_type:is_type, to_user_id:to_user_id},
// 			success:function(data)
// 			{
				
// 			}
// 		});
// });


////////// update_type_status.php END ////////////


















});

