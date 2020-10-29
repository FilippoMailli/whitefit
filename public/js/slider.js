
$(document).ready(function() {
    $(".frecciona-div").click(function(event) {
        $('html, body').animate({scrollTop:$(document).height()}, 1200);
        return false;
    });

});
