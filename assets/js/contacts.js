$(document).ready(
    function() { 
        set_header_margin(margin_px = 120)
        // это надо переписать на медиа-запросах (строка сверху)
        calc_contacts_width()
    })

function set_header_margin(margin_px) {
    let header = $('header')
    let next_element = header.next()
    header_height = header.outerHeight()

    next_element.css('margin-top', header_height + margin_px + 'px')
}

function calc_contacts_width() {
    let contacts_list = $('a.contact')
    var el_max_width = 0

    for (let i = 0; i<contacts_list.length; i++) {
        let el_width = $(contacts_list[i]).outerWidth()
        if (el_width > el_max_width) el_max_width = el_width
    }

    for (let i = 0; i<contacts_list.length; i++) {
        $(contacts_list[i]).css('width', el_max_width + 'px')
    }
}

window.onbeforeunload = function () { // скролл страницы вверх при перезагрузке
    window.scrollTo(0, 0)
}