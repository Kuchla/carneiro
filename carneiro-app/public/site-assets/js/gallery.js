var x = clickfunc();
console.log(x);

function clickfunc() {
    var t = $("#gnt").text();
    return t;
}
$(document).ready(function() {
    $(document).on("click", ".pagination a", function(event) {
        event.preventDefault();
        var page = $(this)
            .attr("href")
            .split("page=")[1];
        var category = $("#category").text();
        fetch_data(page, category);
    });

    function fetch_data(page, category) {
        $.ajax({
            url: "/paginate?page=" + page + "&category=" + category,
            success: function(data) {
                $("#gallery").html(data);
            }
        });
    }
});

$(document).ready(function() {
    $(document).on("click", "#gallery-flters li", function(event) {
        event.preventDefault();
        var category = $(this).text();
        fetch_data(category);
    });

    function fetch_data(category) {
        $.ajax({
            type: "GET",
            url: "/gallery/" + category,
            success: function(data) {
                $("#gallery").html(data);
            }
        });
    }
});
