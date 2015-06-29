   <footer>
            <div class="container">
                <a href="#" class="scrollpoint sp-effect3">
                    <img src="/static/img/freeze/logo.png" alt="" class="logo">
                </a>
                <div class="social">
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a href="#" class="scrollpoint sp-effect3"><i class="fa fa-facebook fa-lg"></i></a>
                </div>                
                <div class="rights">
                    <p>Copyright &copy; SAKEY 2015</p>
                    <p>Template by <a href="http://www.scoopthemes.com" target="_blank">ScoopThemes</a></p>
                </div>
            </div>
        </footer>

    </div>
    <script src="/static/js/jquery-1.11.1.min.js"></script>
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/slick.min.js"></script>
    <script src="/static/js/placeholdem.min.js"></script>
    <script src="/static/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="/static/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/static/js/waypoints.min.js"></script>
    <script src="/static/js/scripts.js"></script>

    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
		<!-- 위치설정 -->
		$('#map_canvas').gmap().bind('init', function(evt, map) {
			$('#map_canvas').gmap('getCurrentPosition', function(position, status) {
				if ( status === 'OK' ) {
					var clientPosition = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
					$('#map_canvas').gmap('addMarker', {'position': clientPosition, 'bounds': true});
					$('#map_canvas').gmap('addShape', 'Circle', { 
						'strokeWeight': 0, 
						'fillColor': "#008595", 
						'fillOpacity': 0.25, 
						'center': clientPosition, 
						'radius': 15, 
						'clickable': false 
					});
				}
			});   
		});
		
		$('#map_canvas').gmap({'callback': function() {
			var self = this;
			self.getCurrentPosition(function(position, status) {
				if ( status === 'OK' ) {
					var clientPosition = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
					self.addMarker({'position': clientPosition, 'bounds': true});
					self.addShape('Circle', { 
						'strokeWeight': 0, 
						'fillColor': "#008595", 
						'fillOpacity': 0.25, 
						'center': clientPosition, 
						'radius': 15, 
						'clickable': false 
					});
				}
			});   
		}});
		
		$('#map_canvas').gmap('getCurrentPosition', function(position, status) {
			if ( status === 'OK' ) {
				var clientPosition = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
				$('#map_canvas').gmap('addMarker', {'position': clientPosition, 'bounds': true});
				$('#map_canvas').gmap('addShape', 'Circle', { 
					'strokeWeight': 0, 
					'fillColor': "#008595", 
					'fillOpacity': 0.25, 
					'center': clientPosition, 
					'radius': 15, 
					'clickable': false 
				});
			}
		});
		<!-- 위치설정 -->
    </script>

</body>

</html>
