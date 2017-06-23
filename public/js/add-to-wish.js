$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
});


$(document).ready(function() {
    $('.add-to-wish').click(function() {

var id = 12; // A random variable for this example

$.ajax({
    method: 'GET', // Type of response and matches what we said in the route
    url: '/customer/ajaxupdate', // This is the url we gave in the route
    data: {'id' : id}, // a JSON object to send back
    success: function(response){ // What to do if we succeed
        // console.log(response); 
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});
        // var val = $(this).data('value');
        // if ($(this).attr('clicked') == 'false') {
        //     var product_id = $(this).data('value');
            // $.post('addtowish',{product_id : 'dasd'}, function(){
            //     // console.log('added');
            //     $('#' + val).html('added to wish');
            //     $(this).attr('clicked', 'true');
            // });

            // $.ajax({
            //     type:"POST",
            //     url:"addtowish",
            //     data : 'product_id',
            //     success:function(data){
            //         console.log('el7');
            //     }
            // });
         
        // }
        // else{
        //     $(this).attr('clicked', 'false');
        //                     console.log('false');

        // }
    });
});