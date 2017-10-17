function initMap() {
  var uluru = {lat: 42.8973462, lng: -76.9007958};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}

jQuery(document).ready(function($){
    var path = window.location.pathname.split("/").pop();
    if ( path == '' ) {
        path = 'index.php';
    }
    var target = $('nav a[href="'+path+'"]');
    target.addClass('is-active');
});
