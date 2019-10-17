var album = 0;
var category = 0;

$("#filter-category").change(function() {
    category = $(this).val();
});
$("#filter-album").change(function() {
    album = $(this).val();
});

$("#filter-search").click(function() {
    $.ajax({
        url: "/galleries/" + category + "/" + album,
        success: function(data) {
            $(".gallery-form").html(data);
        }
    });
});
