$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".add-to-wish").click(function() {
        var val = $(this).data('value');
        if ($(this).attr('clicked') == 'false') {
            var product_id = $(this).data('value');
            $.ajax({
                data: { product_id: product_id },
                url: 'addtowish',
                type: 'POST',
                beforeSend: function(request) {
                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                },
                success: function(response) {
                    $('#' + val).html('Remove from wish list');
                    console.log(response);
                }
            });
            $(this).attr('clicked', 'true');
        } else if ($(this).attr('clicked') == 'true') {
            var product_id = $(this).data('value');
            $.ajax({
                data: { product_id: product_id },
                url: 'removefromwish',
                type: 'POST',
                beforeSend: function(request) {
                    return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                },
                success: function(response) {
                    $('#' + val).html('Add to wish');
                    console.log(response);
                }
            });
            $(this).attr('clicked', 'false');

        }
    });
});


// counter ajax

