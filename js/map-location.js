function initMap() {
    //Give lat and lang of the location
    let place = {lat: 6.864279, lng: 79.902030};

    let map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: place,
        streetViewControl: true,
        panControl: true,
        zoomControl: true,
        mapTypeControl: true,
        /*mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
        },*/
        scaleControl: true,
        overviewMapControl: true,
        rotateControl: true,
        draggable: false //to avoid user getting lost in the map
    });

    //Code for the marker
    const image =
    "https://i.imgur.com/jwkqUZt.png";
    let marker = new google.maps.Marker({
        position: place,
        icon: image,
        animation: google.maps.Animation.BOUNCE,
        map: map
    });

    var infowindow = new google.maps.InfoWindow({
        content: "This is the location of Chills Food!"
    });

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });
}

