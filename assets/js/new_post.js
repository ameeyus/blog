$(document).ready(function() {
    let summernote_div = $('#summernote');
    summernote_div.summernote(); // Инициализация Summernote для создания необходимых элементов

    // Задержка для расчета высоты, чтобы убедиться, что элементы Summernote доступны
    setTimeout(function() {
        let viewport_height = window.innerHeight;
        let header_height = document.querySelector("header").offsetHeight;
        let footer_height = document.querySelector("footer").offsetHeight;
        let toolbar_height = document.querySelector(".note-toolbar").offsetHeight;
        let resize_height = document.querySelector(".note-statusbar").offsetHeight;
        let margins = 32;
        let total_height = viewport_height - header_height - footer_height - toolbar_height - resize_height - margins;

        // Уничтожить и повторно инициализировать Summernote с вычисленной высотой
        summernote_div.summernote('destroy');
        summernote_div.summernote({
            height: total_height
        });
    }, 100); // Настройте таймаут по мере необходимости
});
