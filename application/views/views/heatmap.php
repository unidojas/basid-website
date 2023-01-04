<style>
    #map {
  height: 700px;
  width: 80%;
  margin: 10%;
}
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/basid"><img class="img-fluid w-100" src="./assets/img/basid-logo.png" alt="Basid Logo"></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Test</a></li>
          <li><a class="nav-link scrollto" href="#features">App Features</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#faq">F.A.Q</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#features">Get Started</a></li>
          <li><a class="getstarted scrollto" href="login">Login/Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div id="map"></div>

    <!-- 
    The `defer` attribute causes the callback to execute after the full HTML
    document has been parsed. For non-blocking uses, avoiding race conditions,
    and consistent behavior across browsers, consider loading using Promises
    with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->

  
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1OZKSo8aWQQsQvGqIeRrOOKN3tXyiIfQ&libraries=visualization&callback=initMap">
</script>
    defer
    ></script>
  <script>
    let map;

    function initMap() {
    // map = new google.maps.Map(document.getElementById("map"), {
    //     center: { lat: 8.4774913, lng: 124.6467241 },
    //     zoom: 12.5,
    // });

    console.log('test');


    var heatmapData = [
        new google.maps.LatLng(8.4758967,124.61196),
        new google.maps.LatLng(8.4958927,124.611961),
        new google.maps.LatLng(8.4858367,124.611962),
        new google.maps.LatLng(8.4838567,124.611963),
        new google.maps.LatLng(8.4828267,124.611964),
        new google.maps.LatLng(8.4818967,124.611965)
        ];

        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 8.4774913, lng: 124.6467241 },
        zoom: 13,
        // mapTypeId: 'satellite'
        });

        var heatmap = new google.maps.visualization.HeatmapLayer({
        data: heatmapData
        });

        
        heatmap.setMap(map);
        
        heatmap.set("radius", heatmap.get("radius") ? null : 20);
    }

    </script>