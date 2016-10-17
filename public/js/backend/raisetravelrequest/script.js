$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}



$(document).ready(function () {
        $('#typetravel').change(function () {
            if ($('#typetravel').val() == 'international') {
                console.log('hello');
                $('#hiddendiv').show();
            }
            else {
                $('#hiddendiv').hide();
            }
        });

    
});


//hiding Travel Details.
$(function() {
    $('#row_dim').hide(); 
    $('#ticket_booking').change(function(){
        if($('#ticket_booking').val() == 'yes') {
            $('#row_dim').show(); 
        } else {
            $('#row_dim').hide(); 
        } 
    });

    //Accomodation
    $('#accomodation').hide(); 
    $('#amount_requested').change(function(){
        if($('#amount_requested').val() == 'yes') {
            $('#accomodation').show(); 
        } else {
            $('#accomodation').hide(); 
        } 
    });

    //Travel Advance
    $('#travel_advance').hide(); 
    $('#forex_required').change(function(){
        if($('#forex_required').val() == 'yes') {
            $('#travel_advance').show(); 
        } else {
            $('#travel_advance').hide(); 
        } 
    });

    //Travellers Details
    $('#hiddendiv').hide(); 
    $('#type_travel').change(function(){
        if($('#type_travel').val() == 'international') {
            $('#hiddendiv').show(); 
        } else {
            $('#hiddendiv').hide(); 
        } 
    });

});


//Tables TD addon.
$(document).ready(function(){
      var i=1;
      var j=1;
      var k=1;
      var l=1;

     $('#from_date').datepicker();
     $('#fr_date').datepicker();
     $('#to_date').datepicker();
     $('#frm_date').datepicker();
     $('#tom_date').datepicker();
     $('#dob').datepicker();

     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><input name='from"+i+"' type='text' placeholder='From' class='form-control input-md'  /> </td><td><input  name='to"+i+"' type='text' placeholder='To'  class='form-control input-md'></td><td><input  name='date"+i+"' type='text' placeholder='Travel Date'  id='fr_date'  class='form-control input-md'></td><td><select class=\"form-control\" name=\"travel_type\"><option value=\"air\">Air</option><option value=\"train\">Train</option></select></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
         if(i>1){
         $("#addr"+(i-1)).html('');
         i--;
         }
     });

     
     //second form
     $("#add_roww").click(function(){
      $('#addrr'+j).html("<td>"+ (j+1) +"</td><td><input name='city"+j+"' type='text' placeholder='From' class='form-control input-md'  /> </td><td><input  name='frm_date"+j+"' id='frm_date' type='text' placeholder='From Date'  class='form-control input-md'></td><td><input  name='todate"+j+"' type='text' placeholder='To Date'  id='tom_date'  class='form-control input-md'></td><td><select class=\"form-control\" name='timerept"+j+"'><option value=\"air\">Air</option><option value=\"train\">Train</option></select></td>");

      $('#tab_logicc').append('<tr id="addrr'+(j+1)+'"></tr>');
      j++; 
  });
     $("#delete_roww").click(function(){
         if(j>1){
         $("#addrr"+(j-1)).html('');
         j--;
         }
     });

     //Third form
     $("#add_rowacc").click(function(){
      $('#addracc'+k).html("<td>"+ (k+1) +"</td><td><input name='amount"+k+"' type='text' placeholder='Amount' class='form-control input-md'  /> </td><td><select class=\"form-control\" name='currency"+k+"'><option value=\"select\">Select</option><option value=\"inr\">INR</option><option value=\"usd\">USD</option><option value=\"euro\">Euro</option><option value=\"singapore-dollar\">Singapore Dollar</option><option value=\"gbp\">GBP</option><option value=\"hkd\">HKD</option><option value=\"japanese-yen\">Japanese yen</option><option value=\"chf\">CHF</option><option value=\"aed\">AED</option></select></td>");

      $('#tab_logicacc').append('<tr id="addracc'+(k+1)+'"></tr>');
      k++; 
  });
     $("#delete_rowacc").click(function(){
         if(k>1){
         $("#addracc"+(k-1)).html('');
         k--;
         }
     });


});
 
//Form submittion to DB.Ajax Call.
 $(document).ready(function(){
  //form one
  $('#form_one').click(function(event){  
    event.preventDefault();// using this page stop being refreshing 
    var data = $('#create_role').serialize(); // serialize all the data in the form 
    $.ajax({
      url: '/admin/raisetravelrequest',
      type: "POST",
      data: data,
      dataType: "json",
      success: function(data){
        return(data);
      }
    });    
    return false; 
   });

  //Step 2
   $('#form_two').click(function(event){  
    event.preventDefault();// using this page stop being refreshing 
    var data = $('#create_role').serialize(); // serialize all the data in the form 
    $.ajax({
      url: '/admin/raisetravelrequest',
      type: "POST",
      data: data,
      dataType: "json",
      success: function(data){
        return(data);
      }
    });   
    return false;    
   });
  


//step 3
$('#form_three').click(function(event){  
    event.preventDefault();// using this page stop being refreshing 
    var data = $('#create_role').serialize(); // serialize all the data in the form 
    $.ajax({
      url: '/admin/raisetravelrequest',
      type: "POST",
      data: data,
      dataType: "json",
      success: function(data){
         return(data);
      }
    });    
    return false;  
   });
 
//step 4
$('#form_four').click(function(event){  
    event.preventDefault();// using this page stop being refreshing 
     var data = $('#create_role').serialize(); // serialize all the data in the form 
    $.ajax({
      url: '/admin/raisetravelrequest',
      type: "POST",
      data: data,
      dataType: "json",
      success: function(data){
        return(data);
      }
    });  
    return false;   
   });



//Form validation goes here.
 $('#create_role').bootstrapValidator({
       
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            billable_cost_center: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please Fill Billable Cost Center'
                    }
                }
            },
             passport_number: {
                validators: {
                     stringLength: {
                        max: 10,
                    },
                    notEmpty: {
                        message: 'Please Fill Passport Number'
                    }
                }
            },
            address_insured_person: {
                validators: {
                    notEmpty: {
                        message: 'Please Fill Address Insured Person.'
                    }
                }
            },
            surname: {
                validators: {
                    notEmpty: {
                        message: 'Please Fill Surname.'
                    }
                }
            },
            nominee_name: {
                validators: {
                    notEmpty: {
                        message: 'Please Fill Nominee Name.'
                    }
                }
            },
            mobile_no: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    }
                }
            }
           
           
            }
        })
        .on('status.field.fv', function(e, data) {
            if (data.fv.getInvalidFields().length > 0) {    // There is invalid field
                data.fv.disableSubmitButtons(true);
            }
          });
});
// Forms Validation
