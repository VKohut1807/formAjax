$(document ).ready(function(){
    $("#button").click(function(){
			sendAjaxForm('finishElements', 'form', 'main.php');
			return false; 
	});
});
 
function sendAjaxForm(finishElements, form, url) {
    $.ajax({
        url:      url,
        type:     "POST",
        dataType: "html",
        data: $("#"+form).serialize(),
        success: function(response){ 
        	result = $.parseJSON(response);
        	$('#finishElements').html(
                'Name: '+ result.name
                + '<br>Email: ' + result.email
                + '<br>From: ' + result.from
                + '<br>To: ' + result.to
                + '<br>Tel: ' + result.tel
                + '<br>Date: ' + result.date
                + '<br>Time: ' + result.time
                + '<br>Comfort: ' + result.comfort
                + '<br>Adult: ' + result.adults
                + '<br>Child: ' + result.child
                + '<br>Message: ' + result.message);
    	},
    	error: function(response){
            $('#result_form').html('Error');
    	}
 	});
}