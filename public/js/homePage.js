$(document).ready(function(){
    $.ajax({
        type: 'get',
        url: 'get-home-page-destinations',
        data: {
        },
        success: function(response) {
             if(response.length){
                let data = "";
                response.forEach(element => {
                    data += '<div class="col-md-4 mb-4">'+
                        '<div class="destinations-block">'+
                        '<img src="'+site_url+element.destination_image+'" class="img-fluid" width="" height="" alt="'+element.destination_name+'">'+
                        '<span class="destinations-title">'+element.destination_name+'</span>'+
                        '</div>'+
                        '</div>';
                });
                if(data){
                    $("#destinations").html(data);
                }
             }
        },
        failure: function(response) {
             
        }
    });
});