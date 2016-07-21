
google.maps.event.addDomListener(window, 'load', googlemapinit);

function googlemapinit() {
    // 구글맵의 간단한 옵션
    // 더욱 많은 옵션을 보려면: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
        // 얼마나 줌인할지
        zoom: 16,

        center: new google.maps.LatLng(37.238674, 127.055790), // 망포동

        // 구글 맵 스타일
        styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#ffffff"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2a2a2a"},{"lightness":17}]}]
    };

    // 돔 스크립팅

    var mapElement = document.getElementById('google_map');

    // 맵 기본 Element, Option
    var map = new google.maps.Map(mapElement, mapOptions);

    // 마커찍기
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(37.238674, 127.055790),
        map: map,
        title: '여기를 눌러주세요'
    });
}
