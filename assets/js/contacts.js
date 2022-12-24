$(document).ready(
    function() { 
        set_header_margin(margin_px = 120)
        // это надо переписать на медиа-запросах (строка сверху)
        //set_details_animations()
        set_socials_margin(70, 180)
    })

function set_header_margin(margin_px) {
    let header = $('header')
    let next_element = header.next()
    header_height = header.outerHeight()

    next_element.css('margin-top', header_height + margin_px + 'px')
}

function set_socials_margin(min_margin, max_margin) {
    let contacts = document.getElementsByClassName('contact')
    console.log(contacts)



    for (let ind = 0; ind < contacts.length; ind ++) {
        $(contacts.item(ind)).css(
            'margin-right', 
            Math.floor(Math.random() * (max_margin - min_margin) ) + min_margin)
        }
}