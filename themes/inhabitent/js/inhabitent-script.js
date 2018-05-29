(function($){

    $(function() {
    $('.search-submit').on('click',function (e){
        e.preventDefault();

        var search = $(this).siblings(".search-field");
        search.animate({
            width: "toggle"
        }),
        search.focus()
    }),
        
    $(".search-field").on("blur", function() {
        "" === $(this).val() && $(".search form .search-field").animate({
            width: "hide"
        })
    })
    })

})(jQuery);