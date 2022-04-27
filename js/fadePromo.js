$(function() {
    $(".delete_promo").click(function() {
        var conf = confirm("Are you sure you want to delete this post?");
        if (conf) {
            $(this).parent().parent().fadeOut("slow");
            $("#comment_area").fadeOut("slow");
            $("#comment_submit").fadeOut("slow");
            $(".promo_comment").fadeOut("slow");
        } else {
            return false;
        }
    });
  });

$(function() {
    $(".delete_comment").click(function() {
        var conf = confirm("Are you sure you want to delete this comment?");
        if (conf) {
            $(this).parent().parent().fadeOut("slow");
        } else {
            return false;
        }
    });
});

$(function() {
    $(".promo").hover(function() {
        $(this).children.animate({marginTop: 0, marginBottom: 10});
    }, function() {
        $(this).children.animate({marginTop: 5})
    });
});

// $(function() {
//     $("#leftfeed").hover(function() {
//         $(this).animate({marginLeft: 20, marginRight: 0});
//     }, function() {
//         $(this).animate({marginLeft: 10})
//     });
// });

// $(function() {
//     $("#rightfeed").hover(function() {
//         $(this).animate({marginLeft: 0, marginRight: 20});
//     }, function() {
//         $(this).animate({marginRight: 10})
//     });
// });