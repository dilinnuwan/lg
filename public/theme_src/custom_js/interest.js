//request button default

$('.interest_request_1').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/create', // This is the url we gave in the route
		    data: {'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(user_id,response);
			        if(response==1){

			        	$('#primary_'+interest_id).hide();
			        	$('#secondary_'+interest_id).show();

			        }else if(response=="limit"){
			        	$.toast({
			              heading: 'Warning',
			              text: 'You have reached the maximum limit of requests',
			              showHideTransition: 'slide',
			              icon: 'warning',
			              loaderBg: '#f96868',
			              hideAfter: 5000,
			              position: 'bottom-left'
			            }).show();
			        }
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

$('.interest_delete_1').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/delete', // This is the url we gave in the route
		    data: {'user_id' : user_id, 'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(user_id,response,'record delete');
			        $('#primary_'+interest_id).show();
			        $('#secondary_'+interest_id).hide();
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});


//request sent/cancle button default
$('.interest_delete_2').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/delete', // This is the url we gave in the route
		    data: {'user_id' : user_id, 'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(response,'record delete');
			        $('#primary_'+interest_id).hide();
			        $('#secondary_'+interest_id).show();
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

$('.interest_request_2').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/create', // This is the url we gave in the route
		    data: {'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(response);
			        if(response==1){

			        	$('#primary_'+interest_id).show();
			        	$('#secondary_'+interest_id).hide();

			        }else if(response=="limit"){
			        	$.toast({
			              heading: 'Warning',
			              text: 'You have reached the maximum limit of requests',
			              showHideTransition: 'slide',
			              icon: 'warning',
			              loaderBg: '#f96868',
			              hideAfter: 5000,
			              position: 'bottom-left'
			            }).show();
			        }
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

//accept/cancle button default

$('.interest_update_3').click(function() {
	var button = $(this);
	var interest_record_id = button.data("interest_record_id");
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/update', // This is the url we gave in the route
		    data: {'interest_record_id' : interest_record_id,'user_id':user_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(response);
			        
			        $('#primary_'+user_id).hide();
			        $('#secondary_'+user_id).show();
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

$('.interest_delete_3').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/delete', // This is the url we gave in the route
		    data: {'user_id' : user_id, 'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(user_id,response,'record delete');
			        $('#primary_'+user_id).hide();
			        $('#thired_'+user_id).show();
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

$('.interest_delete_4').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/delete', // This is the url we gave in the route
		    data: {'user_id' : user_id, 'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(user_id,response,'record delete');
			        $('#secondary_'+user_id).hide();
			        $('#thired_'+user_id).show();
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

$('.interest_request_3').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/create', // This is the url we gave in the route
		    data: {'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(response);
			        if(response==1){

			        	$('#thired_'+interest_id).hide();
			        	$('#fourth_'+interest_id).show();

			        }else if(response=="limit"){
			        	$.toast({
			              heading: 'Warning',
			              text: 'You have reached the maximum limit of requests',
			              showHideTransition: 'slide',
			              icon: 'warning',
			              loaderBg: '#f96868',
			              hideAfter: 5000,
			              position: 'bottom-left'
			            }).show();
			        }
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

$('.interest_delete_5').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/delete', // This is the url we gave in the route
		    data: {'user_id' : user_id, 'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(user_id,response,'record delete');
			        $('#fourth_'+interest_id).hide();
			        $('#thired_'+interest_id).show();
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});


//interested/cancle button default someone to me

$('.interest_delete_6').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/delete', // This is the url we gave in the route
		    data: {'user_id' : user_id, 'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(user_id,response,'record delete');
			        $('#primary_'+user_id).hide();
			        $('#secondary_'+user_id).show();
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

$('.interest_request_6').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/create', // This is the url we gave in the route
		    data: {'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(response);
			        if(response==1){

			        	$('#secondary_'+interest_id).hide();
			        	$('#thired_'+interest_id).show();

			        }else if(response=="limit"){
			        	$.toast({
			              heading: 'Warning',
			              text: 'You have reached the maximum limit of requests',
			              showHideTransition: 'slide',
			              icon: 'warning',
			              loaderBg: '#f96868',
			              hideAfter: 5000,
			              position: 'bottom-left'
			            }).show();
			        }
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

$('.interest_delete_7').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/delete', // This is the url we gave in the route
		    data: {'user_id' : user_id, 'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(user_id,response,'record delete');
			        $('#thired_'+interest_id).hide();
			        $('#secondary_'+interest_id).show();
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});


//interested/cancle button default me to someone

$('.interest_delete_8').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/delete', // This is the url we gave in the route
		    data: {'user_id' : user_id, 'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(user_id,response,'record delete');
			        $('#primary_'+interest_id).hide();
			        $('#secondary_'+interest_id).show();
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

$('.interest_request_8').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/create', // This is the url we gave in the route
		    data: {'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(response);
			        if(response==1){

			        	$('#secondary_'+interest_id).hide();
			        	$('#thired_'+interest_id).show();

			        }else if(response=="limit"){
			        	$.toast({
			              heading: 'Warning',
			              text: 'You have reached the maximum limit of requests',
			              showHideTransition: 'slide',
			              icon: 'warning',
			              loaderBg: '#f96868',
			              hideAfter: 5000,
			              position: 'bottom-left'
			            }).show();
			        }
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});

$('.interest_delete_9').click(function() {
	var button = $(this);
	var user_id = button.data("user_id");
	var interest_id = button.data("interest_id");

	  	$.ajaxSetup({
		    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
		});
		$.ajax({
		    method: 'POST', // Type of response and matches what we said in the route
		    url: '/interest/delete', // This is the url we gave in the route
		    data: {'user_id' : user_id, 'interest_id':interest_id}, // a JSON object to send back
		    success: function(response){ // What to do if we succeed
			        console.log(user_id,response,'record delete');
			        $('#thired_'+interest_id).hide();
			        $('#secondary_'+interest_id).show();
		    },
		    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
		        console.log(JSON.stringify(jqXHR));
		        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
		    }
		});
});