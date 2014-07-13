var mobileWidth = 480
    ,tabletWidth = 768;

function isDevice(device, only) {
    only = 'undefined' === typeof only ? false : only;

    switch (device)
    {
        case 'mobile':
            if (window.innerWidth <= mobileWidth) {
                return true;
            }
            break;

        case 'tablet':
            if (window.innerWidth <= tabletWidth) {
                if (only && window.innerWidth <= mobileWidth) {
                    return false;
                }

                return true;
            }
            break;
    }

    return false;
}

function isEmpty(el) {
    return !$.trim(el.html());
}

(function($) {

    var $window = $(window),
        $document = $(document),
        $body = $('body');

    function init() {

    }

    // On window loaded
    $window.load(function() {
        // Removes preload class, this prevents misc setup transitions, etc
        $body.removeClass('preload');
    });

    // ON document loaded
    $document.ready(function() {
        init();
    });

    $document.on('click', $('#navicon'), function(e) {
        $body.toggleClass('nav-open');
    });

})(jQuery);