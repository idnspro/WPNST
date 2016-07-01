function initMenu() {
    $(".sub-menu").hide();
    $(".current_page_item .sub-menu").show();
    $('#accordion li a').click(

    function() {
        var checkElement = $(this).next();
        if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
            checkElement.slideUp('normal');
            return false;
        }
        if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
            $('#accordion ul:visible').not(checkElement.parentsUntil('#accordion')).slideUp('normal');
            checkElement.slideDown('normal');
            return false;
        }
    });
    
    $('.current-menu-item').parentsUntil('#accordion').slideDown('normal');
}
$(function() {
    initMenu();
});