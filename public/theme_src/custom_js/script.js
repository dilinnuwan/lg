$(document).ready(function(){
    setInterval(function(){
        // $("#notification_count").load('/notifications/count')


		$.ajax({ type: "GET",   
		     url: "/notifications/count",   
		     async: false,
		     success : function(count)
		     {
		         if(count == 0){
		         	$("#notification_count_span").hide();
		         }
		         else{
		         	$("#notification_count_span").show();
		         	$("#notification_count_span").html(count);
		         }
		     }
		});



    }, 2000);
});