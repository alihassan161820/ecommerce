 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    var element="";
    xx=document.getElementsByClassName("bid-amount");
    var idArr=[];
    for (var i = 0; i < xx.length; i++) {
            var id =   xx[i].getAttribute("id");
            idArr.push(id);
    }
    var appendDom="";

    
 
    var interval=setInterval(function(){
    $.ajax({
        data: { idIndex: idArr },
        url: 'updataBidAmount',
        type: 'POST',
        beforeSend: function(request) {
            return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
        },
        success: function(response) {
            obj = JSON.parse(response.success)
            for (var i=0;i<obj.length;i++)
            {
                appendDom=document.getElementById('bid-amount-'+obj[i].id);
                appendDom.innerHTML=obj[i].Amount+"<span style=\"font-size:18px\"> EGP</span>";
            }
    
        }
    });
    },15000)

 