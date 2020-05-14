<script src="https://api-maps.yandex.ru/2.1/?apikey=ffd12f22-8ac8-4128-a78c-d675282765f0&lang=ru_RU"></script>
<script>
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("ymap", {
            center: [55.751148, 37.596004],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 16
        }, {
            searchControlProvider: 'yandex#search'
        });

        myMap.geoObjects.add(new ymaps.Placemark([55.751148, 37.596004], {
            //balloonContent: 'цвет <strong>красный</strong>',
            //iconCaption: 'Салон окон "Алиро"'
        }, {
            preset: 'islands#redDotIcon'
        }));

        myMap.behaviors.disable('scrollZoom');
        //ymapProduction.behaviors.disable('drag');
    }
</script>
