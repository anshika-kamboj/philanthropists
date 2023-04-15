<?php
    require 'navbar.php'
    ?>

<!DOCTYPE html>
<html>
<head>
  <title>Nearby Locations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl_rVK5vXjYncY14AxkMhF27MIYv3wk7M&libraries=places"></script>
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
    #notFound {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      font-size: 24px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <h1>Find Nearby Locations</h1>
  <form>
    <label for="location">Location:</label>
    <input type="text" id="location" placeholder="Enter location">
    <button type="submit">Search</button>
  </form>
  <div id="map"></div>
  <div id="notFound" style="display:none;">Location not found</div>

  <script>
    // Replace "YOUR_API_KEY" with your actual Google Maps API key
    const apiKey = "AIzaSyDl_rVK5vXjYncY14AxkMhF27MIYv3wk7M";
    const searchForm = document.querySelector('form');
    const locationInput = document.querySelector('#location');
    const mapElement = document.querySelector('#map');
    const notFoundElement = document.querySelector('#notFound');
    let map;

    // searchForm.addEventListener('submit', (event) => {
    //   event.preventDefault();
    //   const location = locationInput.value;
    //   if (location) {
    //     searchNearbyLocations(location);
    //   }
    // });

    function searchNearbyLocations(location) {
      const geocoder = new google.maps.Geocoder();
      geocoder.geocode({ address: location }, (results, status) => {
        if (status === google.maps.GeocoderStatus.OK) {
          const center = results[0].geometry.location;
          createMap(center);
          searchPlaces(center);
          notFoundElement.style.display = 'none';
        } else {
          notFoundElement.style.display = 'block';
          mapElement.style.display = 'none';
          notFoundElement.textContent = 'Location not found';
        }
      });
    }

    function createMap(center) {
      mapElement.style.display = 'block';
      map = new google.maps.Map(mapElement, {
        center,
        zoom: 15
      });
    }

    function searchPlaces(center) {
      const request = {
        location: center,
        radius: 500, // Search radius in meters
        types: ['restaurant', 'cafe', 'bar'] // Types of places to search for
      };
      const service = new google.maps.places.PlacesService(map);
      service.nearbySearch(request, (results, status) => {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          displayPlaces(results);
        } else {
          alert('Places search failed with status: ' + status);
        }
      });
    }

    function displayPlaces(places) {
      const infoWindow = new google.maps.InfoWindow();
      places.forEach(place => {
        const marker = new google.maps.Marker({
          position: place.geometry.location,
          map
        });
        google.maps.event.addListener(marker, 'click', () => {
          infoWindow.setContent(`<strong>${place.name}</strong><br>${place.vicinity}`);
          infoWindow.open(map, marker);
        });
      });
    }
  </script>
</body>
</html>
