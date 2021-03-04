var x = document.getElementById("error_demo");
var map;
var myLatLng;
$(document).ready(function() {
    geoLocationInit();
});
function geoLocationInit() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, fail);
    } else {
        alert("Browser not supported");
    }
}

function success(position) {
    console.log(position.coords.latitude);
    var latval = position.coords.latitude;
    var lngval = position.coords.longitude;
    myLatLng = new google.maps.LatLng(latval, lngval);
    createMap(myLatLng);
    // nearbySearch(myLatLng, "school");
   // searchGirls(latval,lngval);
}

function fail(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
//Create Map
function createMap(myLatLng) {
    map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 12
    });
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map
    });
}
//Create marker
function createMarker(latlng, icn, name) {
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        icon: icn,
        title: name
    });
}

function searchGirls(lat,lng){
    $.post('http://localhost/api/searchGirls',{lat:lat,lng:lng},function(match){
        // console.log(match);
        $('#girlsResult').html('');

        $.each(match,function(i,val){
            var glatval=val.lat;
            var glngval=val.lng;
            var gname=val.name;
            var GLatLng = new google.maps.LatLng(glatval, glngval);
            var gicn= 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
            createMarker(GLatLng,gicn,gname);
            var html='<h5><li>'+gname+'</li></h5>';
            $('#girlsResult').append(html);
        });

        // $.each(match, function(i, val) {
        //   console.log(val.name);
        // });
    });
}

$('#searchGirls').submit(function(e){
    e.preventDefault();
    var val=$('#locationSelect').val();
    $.post('http://localhost/api/getLocationCoords',{val:val},function(match){

        var myLatLng = new google.maps.LatLng(match[0],match[1]);
        createMap(myLatLng);
        searchGirls(match[0],match[1]);
    });
});


