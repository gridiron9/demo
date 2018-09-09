<!--
	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>My first google map</h1>

	<div id = "googleMap1" style="width: 100%; height: 500px;"></div>
	

	<script>
		function myMap(){
			var stavanger = new google.maps.LatLng(58.983991,5.734863);
			var amsterdam = new google.maps.LatLng(52.395715,4.888916);
			var london = new google.maps.LatLng(51.508742,-0.120850);

			var mapCanvas =  document.getElementById("googleMap1");
			var mapOptions = {center:amsterdam,zoom:5};
			var map = new google.maps.Map(mapCanvas,mapOptions);

			var marker1 = new google.maps.Marker(
				{position:stavanger,
				animation: google.maps.Animation.BOUNCE});
			marker1.setMap(map);
			var marker2 = new google.maps.Marker({
				position:london,
                animation: google.maps.Animation.BOUNCE
				});
			marker2.setMap(map);

			var flighPath = new google.maps.Polyline({
				path:[stavanger,amsterdam,london],
				strokeColor: "#0000FF",
				strokeOpacity:0.8,
				strokeWeight:2
			});

			flighPath.setMap(map);
            
            google.maps.event.addListener(marker1,'click',function(){
            	map.setZoom(15);
                map.setCenter(marker1.getPosition());
            });
			google.maps.event.addListener(marker2,'click',function(){
            	var pos = map.getZoom();
            	map.setZoom(15);
                map.setCenter(marker2.getPosition());
                window.setTimeout(function(){map.setZoom(pos);},3000);
                });

		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</body>
</html>
-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>My first google map</h1>

	<div id = "googleMap1" style="width: 100%; height: 500px;"></div>
	

	<script>
		function myMap(){
			var stavanger = new google.maps.LatLng(58.983991,5.734863);
			var amsterdam = new google.maps.LatLng(52.395715,4.888916);
			var london = new google.maps.LatLng(51.508742,-0.120850);

			var mapCanvas =  document.getElementById("googleMap1");
			var mapOptions = {center:amsterdam,zoom:5};
			var map = new google.maps.Map(mapCanvas,mapOptions);

			var marker1 = new google.maps.Marker(
				{position:stavanger,
				animation: google.maps.Animation.BOUNCE});
			marker1.setMap(map);
			var marker2 = new google.maps.Marker({
				position:london,
                animation: google.maps.Animation.BOUNCE
				});
			marker2.setMap(map);

			var flighPath = new google.maps.Polyline({
				path:[stavanger,amsterdam,london],
				strokeColor: "#0000FF",
				strokeOpacity:0.8,
				strokeWeight:2
			});

			flighPath.setMap(map);
            
            google.maps.event.addListener(marker1,'click',function(){
            	var pos = map.getZoom();
            	map.setZoom(15);
                map.setCenter(marker1.getPosition());
                window.setTimeout(function(){map.setZoom(pos);},3000);
                var infowindow = new google.maps.InfoWindow({
					content:"You are here!"
				});
				infoWindow.open(map,marker1);
            });
			google.maps.event.addListener(marker2,'click',function(){
            	var pos = map.getZoom();
            	map.setZoom(15);
                map.setCenter(marker2.getPosition());
                window.setTimeout(function(){map.setZoom(pos);},3000);
                var infowindow = new google.maps.InfoWindow({
					content:"Destination is here!"
				});
				infowindow.open(map,marker2);
                });

		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</body>
</html>
