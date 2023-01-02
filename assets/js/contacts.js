$(document).ready(
    function() { 
        set_header_margin(margin_px = 120)
        calc_contacts_width()
        // это надо переписать на медиа-запросах (строка сверху)
        //set_details_animations()
        //set_socials_margin(70, 180)
        
       // if (window.innerWidth < ())
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
    } // работает

    for (let i = 0; i<contacts_list.length; i++) {
        $(contacts_list[i]).css('width', el_max_width + 'px')
    }
}

// function set_socials_margin(min_margin, max_margin) {
//     let contacts = document.getElementsByClassName('contact')

//     for (let ind = 0; ind < contacts.length; ind ++) {
//         $(contacts.item(ind)).css(
//             'margin-right', 
//             Math.floor(Math.random() * (max_margin - min_margin) ) + min_margin)
//         }
// }

// function set_socials_size() {
//     let elements 
// }