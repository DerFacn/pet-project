$(document).ready(
    function() { 
        set_header_margin(margin_px = 120)
        // это надо переписать на медиа-запросах (строка сверху)
        //set_details_animations()
        close_opened_details()
    })

function set_header_margin(margin_px) {
    let header = $('header')
    let next_element = header.next()
    header_height = header.outerHeight()

    next_element.css('margin-top', header_height + margin_px + 'px')
}

// function set_details_animations() {
//     $('.skill-details').click( function() {

//         //$(this).toggleClass('details-open-animation')

//         let skill_content = $(this).find('.skill-content')
//         if (skill_content.hasClass('skill-fill-animation')) {
//             skill_content.removeClass('skill-fill-animation')
//         } else { skill_content.addClass('skill-fill-animation') }
//     })
// }

function close_opened_details() {
    let details = document.getElementsByClassName('skill-details')

    for (let details_idx = 0; details_idx < details.length; details_idx++){
        details[details_idx].open = false;
    }
}

window.onbeforeunload = function () { // скролл страницы вверх при перезагрузке
    window.scrollTo(0, 0)
}