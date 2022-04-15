$(function() {
    $("#comment_form").submit(function(e) {
        e.preventDefault(); // dont reload page
        var commentForm = $("#comment_form").serialize();
        var comment = $("#comment_area").val();
        console.log(comment);
        console.log(commentForm);
        $('<div class = "promo_comment">' + 
            comment + 
            '</div>'
        ).prependTo(".comment_feed").fadeIn("slow");

        $('#comment_form').each(function() { 
            this.reset() 
            });

        $.ajax({
            type: "POST", 
            url: "../handlers/comments.php", 
            data: commentForm, 
            success: function() { }, 
            error: function() { alert("Failure") }
        });
    });

});

$(function() {

})


