const types = {
    script: {tag_name: 'script', html_type: 'application/javascript',},
    style:  {tag_name: 'link',  html_type: 'text/css', rel: 'stylesheet',}
}

const constants = { //чтобы нигде в проекте значения не попутались
    assets_path: '/derfacn/assets/',

    page_files: {
        contacts: [
            // ['FILENAME', FILETYPE (прописаны в начале, ex. script_type)]
            // Не пишем / в начале т.к. прибавляется assets_path с '/' в конце
            {source: 'css/contacts.css', type: types.style},
            {source: 'js/contacts.js', type:types.script},
        ],
    }
}


function add_files( page_name ) {
    // TODO доделать
    var page_files = constants.page_files[page_name]

    if (page_files === undefined) {
        alert('Unrecognized page name')
        return 1
    }

    for (let i = 0; i < page_files.length; i++) {
        let tag_name = page_files[i]['type']['tag_name']
        let new_element = document.createElement(tag_name)

        let source = constants.assets_path + page_files[i]['source']
        
        document.head.appendChild(new_element)

        new_element.type = page_files[i]['type']['html_type']

        switch (page_files[i]['type']) { //
            case (types.script): {
                new_element.src = source
                break
            }
            case (types.style): {
                new_element.rel = types.style.rel
                new_element.href = source
                break
            }
            default: {
                alert('Unrecognized file type')
                return 1
            }
        }
    }
}
// Определяем что за старница сейчас
// и добавляем соответсвующие файлы
// стили, JS-скрипты
let doc_name = location.pathname.split('/').slice(-1).toString()
doc_name = doc_name.split('.').slice(0,1).toString()

window.onload = function() {
    add_files( doc_name )
};