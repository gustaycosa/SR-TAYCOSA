<div id="InxUbicanos" class="panel panel-default col-sm-12 backColor" style="margin: 0px;padding: 0px; border-top: solid 10px #fab32e;">
  <div class="col-sm-12 col-xs-12 row" style="height: 466px; margin: 0px; padding: 0px; z-index: 19;">
      <div id="map" style="height: 466px;"></div>
  </div>
  <div class="panel panel-default col-sm-12">
    <div class="panel-heading">
       <h3 class="">Ubicanos en Mexico</h3>
    </div>
    <div class="panel-body">
<!--
      <address class="col-sm-6">
        <strong>JCB TAYCOSA Gomez palacio.</strong><br>
        Blvd. Ejercito mexicano #247 Col. El paraiso<br>
        Gomez palacio, Durango 35115, Mexico.<br>
        <abbr title="Telefono">Tel:</abbr> (871) 719-01-97
      </address>
-->
      <address class="col-sm-4">
        <strong>JCB TAYCOSA Durango.</strong><br>
        Blvd. Francisco Villa #5013 Col. Ciudad industrial<br>
        Durango, Durango 34208, Mexico.<br>
        <abbr title="Telefono">Tel:</abbr> (618) 814-96-82<br>
      </address>

      <address class="col-sm-4">
        <strong>JCB TAYCOSA DELICIAS.</strong><br>
        Calzada del charro #909 Col. Carmen Serdan <br>
        Delicias, Chihuahua, Mexico.<br>
        <abbr title="Telefono">Cel:</abbr> +52 1 (871) 178-61-84<br>
        <abbr title="Telefono">Tel:</abbr> (639) 474-39-36<br>
        <abbr title="Telefono">Tel:</abbr> (639) 467-41-15<br>
      </address>
        
      <address class="col-sm-4">
        <strong>JCB TAYCOSA CHIHUAHUA.</strong><br>
        Av. Tecnologico 12102 Col. Deportistas <br>
        Chihuahua, Chihuahua, Mexico.<br>
        <abbr title="Telefono">Cel:</abbr> +52 1 (871) 178-61-84<br>
        <abbr title="Telefono">Tel:</abbr> (614) 388-96-90<br>
        <abbr title="Telefono">Tel:</abbr> (614) 388-96-91<br>
      </address>

      <address class="col-sm-4">
        <strong>JCB TAYCOSA CASAS GRANDES.</strong><br>
        Calle Benito Juarez #3410 Col. Dublan <br>
        Nuevo Casas Grandes, Chihuahua, Mexico.<br>
        <abbr title="Telefono">Cel:</abbr> +52 1 (871) 178-61-84<br>
        <abbr title="Telefono">Tel:</abbr> (636) 123-28-56<br>
        <abbr title="Telefono">Tel:</abbr> (636) 694-34-10<br>
      </address>    
        
      <address class="col-sm-4">
        <strong>JCB TAYCOSA VILLA AHUMADA.</strong><br>
        Av. Almeida #201 Col. Centro <br>
        Villa Ahumada, Chihuahua, Mexico.<br>
        <abbr title="Telefono">Cel:</abbr> +52 1 (871) 178-61-84<br>
        <abbr title="Telefono">Cel:</abbr> (656) 176-68-61<br>
        <abbr title="Telefono">Tel:</abbr> 664-36-59<br>
      </address>    

      <address class="col-sm-4">
        <strong>JCB TAYCOSA CD JUAREZ.</strong><br>
        Av. Gomez Morin # 1590 Col. Ciudad Satelite <br>
        Ciudad Juarez, Chihuahua, Mexico.<br>
        <abbr title="Telefono">Cel:</abbr> +52 1 (871) 178-61-84<br>
        <abbr title="Telefono">Tel:</abbr> (656) 198-15-19<br>
        <abbr title="Telefono">Tel:</abbr> (656) 446-69-69<br>
        <abbr title="Telefono">Tel:</abbr> (656) 446-60-31<br>
      </address>   

      <address class="col-sm-4">
        <strong style="color:red;">PROXIMENTE MATRIZ LAGUNA.</strong><br>
        Blvd. Centenario Col. Rl ranchito <br>
        Torreon, Coahuila, Mexico.<br>
        <abbr title="Telefono">Cel:</abbr> +52 1 (871) 178-61-84<br>
      </address>   

<!--
      <address class="col-sm-6">
        <strong>Sucursal Gomez palacio.</strong><br>
        Blvd. Ejercito mexicano #247 Col. El paraiso<br>
        Gomez palacio, Durango 35115, Mexico.<br>
        <abbr title="Telefono">Tel:</abbr> (871) 719-01-97
      </address>

      <address class="col-sm-6">
        <strong>Sucursal Durango.</strong><br>
        Blvd. Francisco Villa #5013 Col. Ciudad industrial<br>
        Durango, Durango 34208, Mexico.<br>
        <abbr title="Telefono">Tel:</abbr> (618) 814-96-82
      </address>

      <address class="col-sm-6">
        <strong>Sucursal Delicias.</strong><br>
        Carr. Libr. Delicias Meoqui Calle Tecnologico #610 Lotes urbanos <br>
        Delicias, Chihuahua 33038, Mexico.<br>
        <abbr title="Telefono">Tel:</abbr> (639) 467-41-15
      </address>
-->
    </div>
  </div>
</div>  

<script>

  function initMap() {

    var SucGomez = {lat: 25.597138, lng: -103.493073};
      /*
    var SucDurango = {lat: 24.0593493, lng: -104.6102136};
    var SucDelicias = {lat: 28.2037308, lng: -105.4426778};
*/    
    
    var SucAhumada = {lat: 30.6225593, lng: -106.5172765};
    var SucJuarez = {lat: 31.686235, lng: -106.377021};
    var SucDelicias = {lat: 28.2037308, lng: -105.4426778};
    var SucCasas = {lat: 30.4370291, lng: -107.9171133};
    var SucDurango = {lat: 24.0593493, lng: -104.6102136};
    var SucChihuahua = {lat: 28.7022267, lng: -106.1264543};
    var SucDeli = {lat: 28.1949024, lng: -105.4440035};
    var SucMat = {lat: 25.597144, lng: -103.428972};

    // Specify features and elements to define styles.
    var styleArray = [
      {
        featureType: "all",
        stylers: [
         { saturation: -80 }
        ]
      },{
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [
          { hue: "#00ffee" },
          { saturation: 50 }
        ]
      },{
        featureType: "poi.business",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
      }
    ];

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: SucGomez, 
      scrollwheel: false,
      // Apply the map style array to the map.
      styles: styleArray,
      zoom: 5
    });

  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  });

  // Create a marker and set its position.
  var markerAhumada = new google.maps.Marker({
    map: map,
    position: SucAhumada,
    title: 'TAYCOSA Sucursal Gomez Palacio'
  });

  // Create a marker and set its position.
  var markerJuarez = new google.maps.Marker({
    map: map,
    position: SucJuarez,
    title: 'TAYCOSA Sucursal Durango'
  });

    // Create a marker and set its position.
  var markerDelicias = new google.maps.Marker({
    map: map,
    position: SucDelicias,
    title: 'TAYCOSA Sucursal Delicias'
  });
      
  // Create a marker and set its position.
  var markerCasas = new google.maps.Marker({
    map: map,
    position: SucCasas,
    title: 'TAYCOSA Sucursal Gomez Palacio'
  });

  // Create a marker and set its position.
  var markerDurango = new google.maps.Marker({
    map: map,
    position: SucDurango,
    title: 'TAYCOSA Sucursal Durango'
  });

    // Create a marker and set its position.
  var markerChihuahua = new google.maps.Marker({
    map: map,
    position: SucChihuahua,
    title: 'TAYCOSA Sucursal Delicias'
  });
      
  // Create a marker and set its position.
  var markerGomez = new google.maps.Marker({
    map: map,
    position: SucGomez,
    title: 'TAYCOSA Sucursal Gomez Palacio'
  });

  // Create a marker and set its position.
  var markerDeli = new google.maps.Marker({
    map: map,
    position: SucDeli,
    title: 'TAYCOSA Sucursal Durango'
  });

    // Create a marker and set its position.
  var markerMat = new google.maps.Marker({
    map: map,
    position: SucMat,
    title: 'TAYCOSA Sucursal Delicias'
  });

  }

</script>
    <!--API KEY AIzaSyA3Vr5QkRid8gCNM0BplsaSdIMlaiAE3RQ-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3Vr5QkRid8gCNM0BplsaSdIMlaiAE3RQ&callback=initMap"
        async defer></script>
