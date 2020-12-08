$(document).ready(function () {
    var sections = [
        { link: 'contacto', sectionSelector: 'contact-container' },
        { link: 'acercade', sectionSelector: 'info1-container' },
        { link: 'inicio', sectionSelector: 'hero' },
        { link: 'servicios', sectionSelector: 'areas-container' },
    ];

    Array.from($('.nav-link')).forEach(function (nav) {
        var navLink = nav.href.split('#')[1];

        // find nav link section
        var section = sections.find(function (sec) {
            if (sec.link === navLink) return sec;
        });
        if (!section) return;

        $(nav).click(function (e) {
            e.preventDefault();
            console.log('on click handler');
            $('html, body').animate({
                scrollTop: $('#' + section.sectionSelector).offset().top,
                easing: 'swing',
                duration: 700,
            });
        });
    });
});
