$(function() {
    $(".deletex").click(function() {
        var conf = confirm("Are you sure you want to delete this post?");
        if (conf) {
            $(this).parent().parent().fadeOut("slow");
        } else {
            return false;
        }
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