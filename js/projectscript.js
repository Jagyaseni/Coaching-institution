$(document).ready(function() {
   $("#register-stu").validate(
	{
		rules:{
			    'name':{
				required:true
			}
				'email':{
					required:true
				}
						
		 }
	});	
   	
});

