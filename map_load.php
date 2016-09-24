<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="assets/css/lightbox.css"/>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript" src="assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="assets/js/lightbox.js"></script>
<script type="text/javascript">
    function load_peta() 
    {
        var semarang = new google.maps.LatLng(-7.201470266411334, 110.08918792956547);
        var petaoption = {
        zoom: 9,
        center: semarang,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        peta = new google.maps.Map(document.getElementById("peta"),petaoption);
        google.maps.event.addListener(peta,'click',function(event){
        kasihtanda(event.latLng);
        });

        load_list_terminal('awal');

    }
    google.maps.event.addDomListener(window, 'load', load_peta);
</script>

<title>Untitled Document</title>
</head>

<body>
    <!--Bagian Bar Navigasi Atas termasuk search -->
    <div id="bar_atas">
        <div style="margin:auto; margin-top:5px; padding:5px 5px 5px 5px; height:50px; width:90%;">
        <h1>GIS Hubkominfo</h1>
        </div>
    </div>
    <div>
    <p><a onclick="show_lightbox()" href="javascript:void()">input terminal</a></p>
    </div>

    <div id="background" onclick="hide_lightbox()" class="bgdasar"></div>
    <div id="popup" class="wraplightbox" style="margin:auto">
        <p onclick="hide_lightbox()" style="cursor:pointer">tutup</p>
        <div id="peta" style="height:300px; margin-bottom:10px; border:solid #999 2px;"></div>
    </div>
</body>
</html>