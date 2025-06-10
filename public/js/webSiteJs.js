$(document).ready(function(){
    loadMenu();
});
let windowUrl = window.location.hostname;
function loadMenu(){
    $.ajax({
        url:'/getmenu-items',
        type:'GET',
        accept:'json',
        success:function(data){
             
            if( typeof(data.menu_html.top) != "undefined" && data.menu_html.top !== null){
                $("#top_menu").html(data.menu_html.top);
            }
        }
    });
}

function refreshCapthca(img_id,txt_box_id) {
    $.ajax({
        url: 'refresh-captcha',
        method: 'get',
        dataType: 'json',
        success: function(response) {
            if (response.status) {
                $("#"+img_id).attr("src", response.data);
                $("#"+txt_box_id).val("");
            } else {
                errorMessage(response.message);
            }
        },
        error: function(err) {
            errorMessage("error occurred");
        }
    });
}
