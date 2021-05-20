var $ = jQuery;
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(function() {
    Pace.bar.update = function(prog) {
        Pace.trigger('update', prog);
        this.progress = prog;

        return this.render();
    }; // override update func to trigger 'update' event

    Pace.on('update', (progress) => {
        // console.log('progress -> ', progress);
        if (progress > 75) {
            $('.main-container').fadeIn(0);
            checkvisible();
        }
    });
});