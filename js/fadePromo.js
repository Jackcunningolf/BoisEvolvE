$(function() {
    $(".deletex").click(function() {
       $(this).parent().fadeOut("slow");
    });
  });

$(function() {
    $("#leftfeed").hover(function() {
        $(this).animate({marginLeft: 20, marginRight: 0});
    }, function() {
        $(this).animate({marginLeft: 10})
    });
});

$(function() {
    $("#rightfeed").hover(function() {
        $(this).animate({marginLeft: 0, marginRight: 20});
    }, function() {
        $(this).animate({marginRight: 10})
    });
});