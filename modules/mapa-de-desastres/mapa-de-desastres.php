<section class="mapa-desastres">
    <div class="fondo" data-aos="fade-up" data-aos-offset="100"></div>
    <?php 

$location =  get_sub_field('location');

if( !empty($location) ):
?>
    <div id="map" class="imagen-mapa" data-icon="<?php echo get_stylesheet_directory_uri(); ?>/images/location-pointer.png" data-x="<?php  echo $location['lat']; ?>" data-y="<?php  echo $location['lng']; ?>"  data-aos="fade-left" data-aos-offset="100" style="background:url(<?php the_sub_field('mapa')?>)"></div>
    <?php endif; ?>
    <div class="container">
        <div class="contenido" data-aos="fade-up" data-aos-offset="100">
            <h2 class="title"><?php the_sub_field('title')?></h2>
            <div class="line"></div>
            <p><?php the_sub_field('texto')?></p>
        </div>
    </div>

</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2opgncJgWQkvibe4bVFb0AWAI2I7MSXw">
</script>
<script>
$ = jQuery.noConflict();
var map;
var longitud = $('#map').data("x");
var latitud = $('#map').data("y");
var img = $('#map').data("icon");

var image = new google.maps.MarkerImage(img, new google.maps.Size(11, 11));
var map;
var marker;
var marker2;
var marker3;
var marker4;
var marker5;
var marker6;
var marker7;
var marker8;
var marker9;
var marker10;
var marker11;
var marker12;
var marker13;
var marker14;
var marker15;
var marker16;
var marker17;
var marker18;
var marker19;

var image = new google.maps.MarkerImage(img, new google.maps.Size(11, 11));
var mapOptions = {
    center: new google.maps.LatLng(-9.818375659708465, -75.26100329760459),
    zoom: 5,
    mapTypeId: 'roadmap',

}

map = new google.maps.Map(document.getElementById('map'), mapOptions);

var place = new google.maps.LatLng(-12.7722034, 73.6910342);
marker = new google.maps.Marker({
    position: place,
    title: "VRAEM",
    map: map,
    icon: image
});

var contentString1 = '<div class="text-maps">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/vraem.jpg"/>' +
    '</div>' +
    '<p><b>Junio, Julio y Agosto, 2018</b></p>' +
    '<p>- 6.6 Toneladas de conservas de carne de pollo</p>' +
    '</div>' +
    '</div>';

var infowindow1 = new google.maps.InfoWindow({
    content: contentString1,
});




var place2 = new google.maps.LatLng(-13.6564057, -73.3899459);
marker2 = new google.maps.Marker({
    position: place2,
    title: "Andahuaylas",
    map: map,
    icon: image
});

var contentString2 = '<div class="text-maps">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="https://live.staticflickr.com/2345/2508618305_77d4b03395_b.jpg"/>' +
    '</div>' +
    '<p><b>Junio, Julio y Agosto, 2018</b></p>' +
    '<p>- 27,085 personas afectadas</p>' +
    '<p>- Mantas y alimentos</p>' +
    '<p>- Recaudación de 662,695 soles. </p>' +
    '</div>' +
    '</div>';

var infowindow2 = new google.maps.InfoWindow({
    content: contentString2,
});









var place3 = new google.maps.LatLng(-15.8404252, -70.0278704);

marker3 = new google.maps.Marker({
    position: place3,
    title: "Puno",
    map: map,
    icon: image


});

var contentString3 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="https://live.staticflickr.com/2345/2508618305_77d4b03395_b.jpg"/>' +
    '</div>' +
    '<p><b>Junio, Julio y Agosto, 2018</b></p>' +
    '<p>- 27,085 personas afectadas</p>' +
    '<p>- Mantas y alimentos</p>' +
    '<p>- Recaudación de 662,695 soles. </p>' +
    '</div>' +
    '</div>';

var infowindow3 = new google.maps.InfoWindow({
    content: contentString3,
});











var place4 = new google.maps.LatLng(-13.4435968, -72.9765768);

marker4 = new google.maps.Marker({
    position: place4,
    title: "Ayaviri, Perú",
    map: map,
    icon: image


});

var contentString4 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="https://live.staticflickr.com/2345/2508618305_77d4b03395_b.jpg"/>' +
    '</div>' +
    '<p><b>Junio, Julio y Agosto, 2018</b></p>' +
    '<p>- 27,085 personas afectadas</p>' +
    '<p>- Mantas y alimentos</p>' +
    '<p>- Recaudación de 662,695 soles. </p>' +
    '</div>' +
    '</div>';


var infowindow4 = new google.maps.InfoWindow({
    content: contentString4
});



var place5 = new google.maps.LatLng(-11.9487508, -76.9779107);

marker5 = new google.maps.Marker({
    position: place5,
    title: "San Juan de Lurigancho",
    map: map,
    icon: image


});


var contentString5 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/san-juan-lurigancho.jpg"/>' +
    '</div>' +
    '<p><b>Lima.  13 de Enero, 2019</b></p>' +
    '<p>- 290 Toneladas de agua u productos de limpieza.</p>' +
    '<p>- 12 baños portátiles</p>' +
    '<p>- 300 Kit familiares de aseo </p>' +
    '</div>' +
    '</div>';


var infowindow5 = new google.maps.InfoWindow({
    content: contentString5
});


var place6 = new google.maps.LatLng(-12.9969076, -72.535021);
var marker6;
marker6 = new google.maps.Marker({
    position: place6,
    title: "Huayopata",
    map: map,
    icon: image
});

var contentString6 = '<div class="text-maps" style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/huayopata.jpg"/>' +
    '</div>' +
    '<p><b>21 de Enero 2019</b></p>' +
    '<p>- 50 familias afectadas (250 personas aprox)</p>' +
    '<p>- 800 Kgr. De agua y alimentos </p>' +
    '</div>' +
    '</div>';

var infowindow6 = new google.maps.InfoWindow({
    content: contentString6,
});




var place7 = new google.maps.LatLng(-18.0138696, -70.2511597);

marker7 = new google.maps.Marker({
    position: place7,
    title: "Tacna",
    map: map,
    icon: image
});


var contentString7 = '<div class="text-maps" style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/tacna.jpg"/>' +
    '</div>' +
    '<p><b>Febrero 2019</b></p>' +
    '<p>- 176 Toneladas de agua y alimentos</p>' +
    '<p>- 300 Toneladas de Agua (P&G)</p>' +
    '</div>' +
    '</div>';

var infowindow7 = new google.maps.InfoWindow({
    content: contentString7,
});





var place8 = new google.maps.LatLng(-17.1938025, -70.9345636);

marker8 = new google.maps.Marker({
    position: place8,
    title: "Moquegua",
    map: map,
    icon: image
});

var contentString8 = '<div class="text-maps" style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/moquegua.jpg"/>' +
    '</div>' +
    '<p><b>Febrero 2019</b></p>' +
    '<p>- 176 Toneladas de agua y alimentos</p>' +
    '<p>- 300 Toneladas de Agua (P&G)</p>' +
    '</div>' +
    '</div>';

var infowindow8 = new google.maps.InfoWindow({
    content: contentString8,
});






var place9 = new google.maps.LatLng(-16.3988667, -71.5369607);

marker9 = new google.maps.Marker({
    position: place9,
    title: "Arequipa",
    map: map,
    icon: image
});

var contentString9 = '<div class="text-maps" style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/arequipa.jpg"/>' +
    '</div>' +
    '<p><b>Febrero 2019</b></p>' +
    '<p>- 176 Toneladas de agua y alimentos</p>' +
    '<p>- 300 Toneladas de Agua (P&G)</p>' +
    '</div>' +
    '</div>';

var infowindow9 = new google.maps.InfoWindow({
    content: contentString9,
});




var place10 = new google.maps.LatLng(-5.1949018, -80.6323);

marker10 = new google.maps.Marker({
    position: place10,
    title: "Piura",
    map: map,
    icon: image
});


var contentString10 = '<div class="text-maps" style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/piura.jpg"/>' +
    '</div>' +
    '<p><b>2017</b></p>' +
    '<p>- 500 Toneladas de agua y alimentos</p>' +
    '<p>- Plantas potabilizadoras de agua</p>' +
    '<p>- Moto bombas</p>' +
    '</div>' +
    '</div>';

var infowindow10 = new google.maps.InfoWindow({
    content: contentString10,
});




var place11 = new google.maps.LatLng(-14, -73);

marker11 = new google.maps.Marker({
    position: place11,
    title: "Apurimac",
    map: map,
    icon: image
});


var contentString11 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/apurimac.jpg"/>' +
    '</div>' +
    '<p><b>Junio, Julio y Agosto, 2018</b></p>' +
    '<p>- 27,085 personas afectadas</p>' +
    '<p>- Mantas y alimentos</p>' +
    '<p>- Recaudación de 662,695 soles. </p>' +
    '</div>' +
    '</div>';


var infowindow11 = new google.maps.InfoWindow({
    content: contentString11
});





var place12 = new google.maps.LatLng(-14.4174733, -72.0000172);

marker12 = new google.maps.Marker({
    position: place12,
    title: "Chumbivilcas",
    map: map,
    icon: image
});

var contentString12 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/chumbivilcas.jpg"/>' +
    '</div>' +
    '<p><b>Junio, Julio y Agosto, 2018</b></p>' +
    '<p>- 27,085 personas afectadas</p>' +
    '<p>- Mantas y alimentos</p>' +
    '<p>- Recaudación de 662,695 soles. </p>' +
    '</div>' +
    '</div>';


var infowindow12 = new google.maps.InfoWindow({
    content: contentString12
});






var place13 = new google.maps.LatLng(-13.5212349, -71.9711244);

marker13 = new google.maps.Marker({
    position: place13,
    title: "Cuzco",
    map: map,
    icon: image
});

var contentString13 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/cusco.jpg"/>' +
    '</div>' +
    '<p><b>Junio, Julio y Agosto, 2018</b></p>' +
    '<p>- 27,085 personas afectadas</p>' +
    '<p>- Mantas y alimentos</p>' +
    '<p>- Recaudación de 662,695 soles. </p>' +
    '</div>' +
    '</div>';


var infowindow13 = new google.maps.InfoWindow({
    content: contentString13
});




var place14 = new google.maps.LatLng(-15.768733, -73.3752297);

marker14 = new google.maps.Marker({
    position: place14,
    title: "Caravelí",
    map: map,
    icon: image
});

var contentString14 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/caraveli.jpg"/>' +
    '</div>' +
    '<p><b>19 de Enero, 2018</b></p>' +
    '<p>- 2,000 personas afectadas</p>' +
    '<p>- 26 Toneladas de agua, bebidas y alimentos no perecibles</p>' +
    '</div>' +
    '</div>';


var infowindow14 = new google.maps.InfoWindow({
    content: contentString14
});







var place15 = new google.maps.LatLng(-6.0446277, -74.7249104);

marker15 = new google.maps.Marker({
    position: place15,
    title: "Tres Unidos",
    map: map,
    icon: image
});

var contentString15 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/tres-unidos.jpg"/>' +
    '</div>' +
    '<p><b>4 de Noviembre, 2017</b></p>' +
    '<p>- 207 familias Damnificadas y 431 familias afectadas</p>' +
    '<p>- 4.5 Toneladas agua y bebidas   </p>' +
    '</div>' +
    '</div>';


var infowindow15 = new google.maps.InfoWindow({
    content: contentString15
});




var place16 = new google.maps.LatLng(-4.0204036, -71.1034362);

marker16 = new google.maps.Marker({
    position: place16,
    title: "San Pablo, Loreto",
    map: map,
    icon: image
});


var contentString16 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/loreto.jpg"/>' +
    '</div>' +
    '<p><b>3 de Noviembre, 2017</b></p>' +

    '</div>';


var infowindow16 = new google.maps.InfoWindow({
    content: contentString16
});





var place17 = new google.maps.LatLng(-10.9031748, -77.1924482);

marker17 = new google.maps.Marker({
    position: place17,
    title: "Arapa",
    map: map,
    icon: image
});


var contentString17 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/arapa.jpg"/>' +
    '</div>' +
    '<p><b>22 de Septiembre, 2017</b></p>' +

    '</div>';


var infowindow17 = new google.maps.InfoWindow({
    content: contentString17
});





var place18 = new google.maps.LatLng(-7.3238991, -76.5698589);

marker18 = new google.maps.Marker({
    position: place18,
    title: "Playa Hermosa",
    map: map,
    icon: image
});


var contentString18 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/playa-hermosa.jpg"/>' +
    '</div>' +
    '<p><b>6 de Octubre, 2017</b></p>' +

    '</div>';


var infowindow18 = new google.maps.InfoWindow({
    content: contentString18
});






var place19 = new google.maps.LatLng(-7.0238211, -76.1330208);

marker19 = new google.maps.Marker({
    position: place19,
    title: "Shamboyacu",
    map: map,
    icon: image
});


var contentString19 = '<div class="text-maps"  style="max-width:220px;">' +
    '<div class="siteNotice">' + '<img width=220" height="auto" src="http://www.sep.org.pe/wp-content/themes/hombroahombro/images/imagenes-mapa/shamboyacu.jpg"/>' +
    '</div>' +
    '<p><b>16 de Noviembre, 2017</b></p>' +

    '</div>';


var infowindow19 = new google.maps.InfoWindow({
    content: contentString19
});




marker.addListener('click', function () {
  infowindow1.open(map, marker);
    map.setZoom(12);
    map.setCenter(marker.getPosition());

});
   
marker2.addListener('click', function () {
  infowindow2.open(map, marker2);
    map.setZoom(12);
    map.setCenter(marker2.getPosition());

});
   


marker3.addListener('click', function () {
  infowindow3.open(map, marker3);
    map.setZoom(12);
    map.setCenter(marker3.getPosition());
});

marker4.addListener('click', function () {
    infowindow4.open(map, marker4);
    map.setZoom(12);
    map.setCenter(marker4.getPosition());
});

marker5.addListener('click', function () {
    infowindow5.open(map, marker5);
    map.setZoom(12);
    map.setCenter(marker5.getPosition());
});

marker6.addListener('click', function () {
  infowindow6.open(map, marker6);
    map.setZoom(12);
    map.setCenter(marker6.getPosition());
});

marker7.addListener('click', function () {
  infowindow7.open(map, marker7);
    map.setZoom(12);
    map.setCenter(marker7.getPosition());
});


marker8.addListener('click', function () {
  infowindow8.open(map, marker8);
    map.setZoom(12);
    map.setCenter(marker8.getPosition());
});
marker9.addListener('click', function () {
  infowindow9.open(map, marker9);
    map.setZoom(12);
    map.setCenter(marker9.getPosition());
});

marker10.addListener('click', function () {
  infowindow10.open(map, marker10);
    map.setZoom(12);
    map.setCenter(marker10.getPosition());
});

marker11.addListener('click', function () {
  infowindow11.open(map, marker11);
    map.setZoom(12);
    map.setCenter(marker11.getPosition());
});

marker12.addListener('click', function () {
  infowindow12.open(map, marker12);
    map.setZoom(12);
    map.setCenter(marker12.getPosition());
});

marker13.addListener('click', function () {
  infowindow13.open(map, marker13);
    map.setZoom(12);
    map.setCenter(marker13.getPosition());
});

marker14.addListener('click', function () {
  infowindow14.open(map, marker14);
    map.setZoom(12);
    map.setCenter(marker14.getPosition());
});

marker15.addListener('click', function () {
  infowindow15.open(map, marker15);
    map.setZoom(12);
    map.setCenter(marker15.getPosition());
});

marker16.addListener('click', function () {
  infowindow16.open(map, marker16);
    map.setZoom(12);
    map.setCenter(marker16.getPosition());
});

marker17.addListener('click', function () {
  infowindow17.open(map, marker17);
    map.setZoom(12);
    map.setCenter(marker17.getPosition());
});

marker18.addListener('click', function () {
  infowindow18.open(map, marker18);
    map.setZoom(16);
    map.setCenter(marker18.getPosition());
});

marker19.addListener('click', function () {
  infowindow19.open(map, marker19);
    map.setZoom(16);
    map.setCenter(marker19.getPosition());
});



    </script>