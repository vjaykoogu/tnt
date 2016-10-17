$(document).ready(function () {
 
 // 	// Adhoc Request Form validation.
	// $('#adhocform').validate({    
 //    rules: {
 //        mobile_number: {
 //            maxlength: 10,
 //            required: true
 //        },
 //        date_pick: {
 //            format: 'MM/DD/YYYY',
 //            required: true
 //        },
        
 //        date_pick_to: {
 //            format: 'MM/DD/YYYY',
 //            required: true
 //        },
 //        pickup_address:{
 //        	 maxlength: 30,
 //        	 required: true
 //        },
 //        reason_for_request: {
 //        	maxlength: 30,
 //        	required: true
 //        }

 //    },
 //    highlight: function(element) {
 //        var id_attr = "#" + $( element ).attr("id") + "1";
 //       $(element).closest('.valir').removeClass('has-success').addClass('has-error');
 //        $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');                 
 //    },
 //    unhighlight: function(element) {
 //        var id_attr = "#" + $( element ).attr("id") + "1";
 //        $(element).closest('.valir').removeClass('has-error').addClass('has-success');
 //        $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');      
 //    },
 //    errorElement: 'span',
 //        errorClass: 'help-block',
 //        errorPlacement: function(error, element) {
 //            if(element.length) {
 //                error.insertAfter(element);
 //            } else {
 //            error.insertAfter(element);
 //            }
 //        } 
 // });


 	//Date picker need to chnage after first version.
    $('#date_pick').datepick();
    $('#date_pick_to').datepick();
    $('#pickup_time').timepicki();
    
});

