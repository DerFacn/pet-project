$(document).ready(
    function() { 
        setInterval(set_header_margin(margin_px = 80), 1000)
        // // почему-то не работает как надо (строка выше)
        // setInterval(function() {
        //     $('header').css('padding', '+=20px')
        //     //$('header').animate({'padding': '+=10px' }, '1000', 'linear')
        // }, 2000 )
        set_header_margin(margin_px = 800)
        set_details_animations()
        close_opened_details()
    })

function set_header_margin(margin_px){
    let header = $('header')
    let next_element = header.next()
    header_height = header.outerHeight()

    next_element.css('margin-top', header_height + margin_px + 'px')
}

function set_details_animations() {
    let skills = $('.skill-details')


    for (let skill_idx = 0; skill_idx < skills.length; skill_idx++) {

        let skill_sum = skills[skill_idx].children[0]
        let skill_content = skills[skill_idx].children[1]

        skill_sum.click( function () { 

            if (skill_content.hasClass('skill-fill-animation')) {
                skill_content.removeClass('skill-fill-animation')
            } else {
                skill_content.addClass('skill-fill-animation')
            }
        })
    }
}

function close_opened_details() {
    let details = document.getElementsByClassName('skill-details')

    for (let details_idx = 0; details_idx < details.length; details_idx++){
        details[details_idx].open = false;
    }
}

window.onbeforeunload = function () { // скролл страницы вверх при перезагрузке
    window.scrollTo(0, 0)
}