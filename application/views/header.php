<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>SaKEY :: 전국 24시 출장열쇠 서비스 세이키</title>
    <meta name="keywords" content="출장 열쇠, 열쇠, 세이키, sakey, 출장열쇠 세이키, 자동차 출장열쇠, 자동차 열쇠, 열쇠 복사, 열쇠 앱, 출장, 디지털 도어락, 도어락 고장, 고장, 출장 열쇠 앱, Sakey app, 열쇠 고장, 자물쇠 고장, 문 고장, 도어레버 고장, 출장 열쇠 서비스, 출장 서비스, 전국 열쇠, 전국 출장, 24시 출장, 24시 열쇠, 열쇠 잃어버림, 서울 출장열쇠, 강남 출장열쇠, 분당 출장열쇠, locksmich, lost key, broken key, locksmith service, locksmith app">
    <meta name="description" content="전국 24시간 언제 어디서든 열쇠사고에는 SAKEY 클릭한번에 달려갑니다">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta property="og:title" content="전국 24시 30분 출장열쇠 세이키">
    <meta property="og:site_name" content="전국 24시 30분 출장열쇠 세이키">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.sakey.co.kr/index.html">
    <meta property="og:image" content="#">
    <meta property="og:description" content="전국 24시 언제 어디에서나 어떤 열쇠 서비스든 클릭한번에 신청하는 새로운 출장열쇠 서비스 SAKEY!">
    <meta http-equiv="Access-Control-Allow-Origin" content="https://www.sakey.co.kr">
    
    <link rel="shortcut icon" href="/static/img/favicon.png">

    <link rel="stylesheet" href="/static/css/bootstrap.css">
    
    <link rel="stylesheet" href="/static/css/animate.css">
    <link rel="stylesheet" href="/static/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/css/slick.css">
    <link rel="stylesheet" href="/static/js/rs-plugin/css/settings.css">

    <link rel="stylesheet" href="/static/css/freeze.css">


    <script type="text/javascript" src="/static/js/modernizr.custom.32033.js"></script>
    <script type="text/javascript">
                
            var mobileDemo = { 'center': '57.7973333,12.0502107', 'zoom': 10 };
            
            ////////////////////////////////////////////////////////////
            
            $('#basic_map').live('pageinit', function() {
                demo.add('basic_map', function() {
                    $('#map_canvas').gmap({'center': mobileDemo.center, 'zoom': mobileDemo.zoom, 'disableDefaultUI':true, 'callback': function() {
                        var self = this;
                        self.addMarker({'position': this.get('map').getCenter() }).click(function() {
                            self.openInfoWindow({ 'content': 'Hello World!' }, this);
                        });
                    }}); 
                }).load('basic_map');
            });
            
            $('#basic_map').live('pageshow', function() {
                demo.add('basic_map', function() { $('#map_canvas').gmap('refresh'); }).load('basic_map');
            });
            
            ////////////////////////////////////////////////////////////
            
            $('#directions_map').live('pageinit', function() {
                demo.add('directions_map', function() {
                    $('#map_canvas_1').gmap({'center': mobileDemo.center, 'zoom': mobileDemo.zoom, 'disableDefaultUI':true, 'callback': function() {
                        var self = this;
                        self.set('getCurrentPosition', function() {
                            self.refresh();
                            self.getCurrentPosition( function(position, status) {
                                if ( status === 'OK' ) {
                                    var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
                                    self.get('map').panTo(latlng);
                                    self.search({ 'location': latlng }, function(results, status) {
                                        if ( status === 'OK' ) {
                                            $('#from').val(results[0].formatted_address);
                                        }
                                    });
                                } else {
                                    alert('Unable to get current position');
                                }
                            });
                        });
                        $('#submit').click(function() {
                            self.displayDirections({ 'origin': $('#from').val(), 'destination': $('#to').val(), 'travelMode': google.maps.DirectionsTravelMode.DRIVING }, { 'panel': document.getElementById('directions')}, function(response, status) {
                                ( status === 'OK' ) ? $('#results').show() : $('#results').hide();
                            });
                            return false;
                        });
                    }});
                }).load('directions_map');
            });
            
            $('#directions_map').live('pageshow', function() {
                demo.add('directions_map', $('#map_canvas_1').gmap('get', 'getCurrentPosition')).load('directions_map');
            });
            
            ////////////////////////////////////////////////////////////
                            
            $('#gps_map').live('pageinit', function() {
                demo.add('gps_map', function() {
                    $('#map_canvas_2').gmap({'center': mobileDemo.center, 'zoom': mobileDemo.zoom, 'disableDefaultUI':true, 'callback': function(map) {
                        var self = this;
                        self.watchPosition(function(position, status) {
                            if ( status === 'OK' ) {
                                var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                                if ( !self.get('markers').client ) {
                                    self.addMarker({ 'id': 'client', 'position': latlng, 'bounds': true });
                                } else {
                                    self.get('markers').client.setPosition(latlng);
                                    map.panTo(latlng);
                                }
                            }
                        });
                    }});
                }).load('gps_map');
            });
            
            $('#gps_map').live('pageshow', function() {
                demo.add('gps_map', function() { $('#map_canvas_2').gmap('refresh'); }).load('gps_map');
            });
            
            $('#gps_map').live("pagehide", function() {
                demo.add('gps_map', function() { $('#map_canvas_2').gmap('clearWatch'); }).load('gps_map');
            });
            
            ////////////////////////////////////////////////////////////
            
            $('#places').live('pageinit', function() {
                demo.add('places_1', function() {
                    $('#map_canvas_3').gmap({'center': mobileDemo.center, 'zoom': mobileDemo.zoom, 'disableDefaultUI':true, 'callback': function() {
                        var self = this;
                        var control = self.get('control', function() {
                            $(self.el).append('<div id="control"><div><input id="places-search" class="ui-bar-d ui-input-text ui-body-null ui-corner-all ui-shadow-inset ui-body-d ui-autocomplete-input" type="text"/></div></div>');
                            self.autocomplete($('#places-search')[0], function(ui) {
                                self.clear('markers');
                                self.set('bounds', null);
                                self.placesSearch({ 'location': ui.item.position, 'radius': '5000' }, function(results, status) {
                                    if ( status === 'OK' ) {
                                        $.each(results, function(i, item) {
                                            self.addMarker({ 'id': item.id, 'position': item.geometry.location, 'bounds':true }).click(function() {
                                                self.openInfoWindow({'content': '<h4>'+item.name+'</h4>'}, this);
                                            });
                                        });
                                    }
                                });
                            });
                            return $('#control')[0];
                        });
                        self.addControl(new control(), 1);
                    }});
                }).load('places_1');
            });
            
            $('#places').live('pageshow', function() {
                demo.add('places_2', function() { $('#map_canvas_3').gmap('refresh'); }).load('places_2');
            });
            
            function fn_current_loc_set()
            {
                var chk = confirm("지금 계신 지역을 현재위치로 설정하시겠습니까?");
                if (chk)
                {
                    fn_deleteCookie("loc_flag");
                    fn_deleteCookie("addr_st");

                    if (fn_getCookie('loc_flag') == "")
                    {
                        if (!!navigator.geolocation) {
                            fn_setCookie("loc_flag", 1, 5);
                            navigator.geolocation.getCurrentPosition(fn_callbackSuccess,fn_callbackError);
                        } else {
                            alert("이 브라우저는 Geolocation를 지원하지 않습니다");
                        }
                    }
                }
            }
        </script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>