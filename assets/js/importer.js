const constants = { //чтобы нигде в проекте значения не попутались
    assets_path: "/derfacn/assets/",


}

function add_files( files_info ) {
    // TODO доделать
    for(let i = 0; i < scripts.length; i++) {

        let script = document.createElement(ELEMENT_TYPE);

        script.type = HTML_TYPE
        script.src = constants.assets_path + FILES_INFO[i][FILENAME];
        document.head.appendChild(script);

    }
}

// Определяем что за старница сейчас
// и добавляем соответсвующие файлы
// стили, JS-скрипты
let doc_name = location.pathname.split("/").slice(-1).toString()
doc_name = doc_name.split(".").slice(0,1).toString()

switch (doc_name) {
    case 'contacts': { //условие корректно работает
        add_script() // REFERENCE ERROR (доделать функцию, щас псевдокод)
    }
    default: {
        console.log('contacts' === doc_name)
        console.trace('DEBUG INFO importer.js: ' + doc_name)
    }
}