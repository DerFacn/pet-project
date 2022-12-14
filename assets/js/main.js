$(document).ready(
    function() { 
        let header = $('header')
        let next_element = header.next()
        header_height = header.outerHeight()

        next_element.css('margin-top', header_height + 80 + 'px')
    
    })

window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}