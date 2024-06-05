$(document).ready(function(){
		$flag=1;
    	$("#b_name").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_name").text("* You have to enter your input!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_name").text("");

        	}
       });
        $("#lastname").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_lastname").text("* You have to enter your input!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_lastname").text("");
        	}
       });
        $("#dob").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_dob").text("* You have to enter your input!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_dob").text("");
        	}
       });
    
        $("#age").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_age").text("* You have to enter your input!");
        	}
        	else
        	{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_age").text("");

        	}
        	});
        $("#phone").focusout(function(){
            $pho =$("#phone").val();
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* You have to enter your input!");
        	}
        	else if ($pho.length!=10)
        	{   
                    $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* Lenght of Phone Number Should Be Ten");
        	}
        	else if(!$.isNumeric($pho))
        	{
        	        $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* Phone Number Should Be Numeric");  
        	}
        	else{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_phone").text("");
        	}

    	});

   		$( "#submit" ).click(function() {
   			if($("#b_name" ).val()=='')
   			{
        		$("#b_name").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_name").text("* Please provide a valid input..!");
        	}
        	if($("#b_category" ).val()=='')
   			{
        		$("#b_category").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_category").text("* Please provide a valid input..!");
        	}
   			if($("#b_subcategory" ).val()=='')
   			{
        		$("#b_subcategory").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_subcategory").text("* Please provide a valid input..!");
        	}
   			if($("#b_description" ).val()=='')
   			{
        		$("#b_description").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_description").text("* Please provide a valid input..!");
        	}
        	if($("#b_image" ).val()=='')
   			{
        		$("#b_image").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_b_image").text("* Please provide a valid input..!");
        	}
			});


    	
	});