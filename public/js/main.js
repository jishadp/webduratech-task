$(document).ready(function() {
    $(".doStatusChange").click(function(t) {
        var a = $(this).attr("action"),
            e = $(this).attr("status"),
            s = $(this).attr("book-id"),
            i = $(this);
        i.closest(".holdr").addClass("hiddenDiv").slideUp("slow"), $.ajax({
            type: "POST",
            url: a,
            data: {
                status: e,
                book_id: s
            },
            success: function(t) {
                200 == t.status ? (i.closest("body").find(".header div a.active span").html(parseInt(i.closest("body").find(".header div a.active span").html() - 1)), i.closest("body").find(".header div a.active").parent().next().find("span").html(parseInt(i.closest("body").find(".header div a.active").parent().next().find("span").html()) + 1), i.closest(".mainDiv").children().not(".hiddenDiv").length < 5 && $(".viewMrBtn").remove()) : alert("ERROR !!. Please contact system administrator")
            }
        })
    })
});