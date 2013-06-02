$(document).ready(function(){    
        
        //alert(1);        
	$('.alert').alert();
    $('.alert').alert('close');

    $("#QuestionTopicId").select2({
    	placeholder: "Select a topic"
    });
    $("#QuestionLevel").select2({placeholder: "Select a Level"});

});

