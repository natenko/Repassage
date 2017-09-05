<?php $options = get_option('theme_settings'); ?>

<script>

    function initialize() {
        var latlng = new google.maps.LatLng(49.993646, 36.2325664);

        var mapinfo = "<?php echo $options['map-info']?>";


        if ($(window).width() > 480) {
            var mapcanter = new google.maps.LatLng(49.993646, 36.2325664);
        } else {
            var mapcanter = new google.maps.LatLng(49.99764, 36.2325664);
        }

        var styles = [{
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [{"color": "#444444"}]
        }, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [{"visibility": "off"}]
        }, {
            "featureType": "poi",
            "elementType": "labels.text",
            "stylers": [{"visibility": "off"}]
        }, {
            "featureType": "road",
            "elementType": "all",
            "stylers": [{"saturation": -100}, {"lightness": 45}]
        }, {
            "featureType": "road.highway",
            "elementType": "all",
            "stylers": [{"visibility": "simplified"}]
        }, {
            "featureType": "road.arterial",
            "elementType": "labels.icon",
            "stylers": [{"visibility": "off"}]
        }, {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [{"visibility": "off"}]
        }, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#dbdbdb"}, {"visibility": "on"}]}];

        var myOptions = {
            zoom: 14,
            styles: styles,
            center: mapcanter,
            scrollwheel: false,
            mapTypeControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var image = '<?php echo get_template_directory_uri(); ?>/images/marker.png';
        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

        var myMarker = new google.maps.Marker(
            {
                position: latlng,
                map: map,
                icon: image,
                animation: google.maps.Animation.DROP,
                title: mapinfo
            }
        );
        google.maps.event.addListener(myMarker, 'click', toggleBounce);
        function toggleBounce() {

            if (myMarker.getAnimation() != null) {
                myMarker.setAnimation(null);
            } else {

            }
        }

        var infowindow = new google.maps.InfoWindow();
        google.maps.event.addListener(myMarker, 'click', function () {
            infowindow.setContent(this.title);
            infowindow.open(map, this);
        });
        infowindow.open(map, myMarker);
        infowindow.setContent(myMarker.title);

        //изменение центра карты в зависимости от ориентации
        var currCenter = map.getCenter();

        window.addEventListener("orientationchange", function () {
            google.maps.event.trigger(map, 'resize');
            map.setCenter(currCenter);
        }, false);

    }
    setTimeout(function () {
        google.maps.event.addDomListener(window, 'load', initialize);
    }, 200);

document.addEventListener('DOMContentLoaded', initialize);
    // Прослушка события смены ориентации


    $(document).ready(function () {
        $(".btn-map").click(function () {
            $(".box-map").toggleClass("height-box");
        });
        
    });
</script>

<div class="map-contant">
    <span class="btn-map">показать  местоположение офиса нашей компании</span>
    <div class="box-map">
        <div class="map" id="map_canvas"></div>
    </div>
</div>