$(document).ready(
    function() { 
        set_header_margin(margin_px = 120)
        // это надо переписать на медиа-запросах (строка сверху)
    })

function set_header_margin(margin_px) {
    let header = $('header')
    let next_element = header.next()
    header_height = header.outerHeight()

    next_element.css('margin-top', header_height + margin_px + 'px')
}

window.onbeforeunload = function () { // скролл страницы вверх при перезагрузке
    window.scrollTo(0, 0)
}