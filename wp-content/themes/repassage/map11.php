<?php $options = get_option('theme_settings'); ?>

<script>
    var map_x = "<?php echo $options['map-1']?>";
    var map_y = "<?php echo $options['map-2']?>";

    var mapinfo = "<?php echo $options['map-info']?>";
    var latlng = new google.maps.LatLng(map_x, map_y);
    
    function initialize() {
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
            center: mapcanters,
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
                myMarker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }

        var infowindow = new google.maps.InfoWindow();

        google.maps.event.addListener(myMarker, 'click', function () {
            infowindow.setContent(this.title);
            infowindow.open(map, this);
        });
        infowindow.open(map, myMarker);
        infowindow.setContent(myMarker.title);
    }
    google.maps.event.addDomListener(window, 'load', initialize);


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