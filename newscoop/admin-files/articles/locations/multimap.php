<?php
/**
 * @package
 */
require_once($GLOBALS['g_campsiteDir']."/classes/GeoPreferences.php");
require_once($GLOBALS['g_campsiteDir']."/classes/GeoMap.php");

camp_load_translation_strings("api");
camp_load_translation_strings("geolocation");

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Expires" content="now" />
	<title><?php putGS("Map Preview"); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo $Campsite['ADMIN_STYLE_URL']; ?>/admin_stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $Campsite['ADMIN_STYLE_URL']; ?>/map-preview.css" />

	<script type="text/javascript" src="<?php echo $Campsite['WEBSITE_URL']; ?>/javascript/base64.js"></script>
	<script type="text/javascript" src="<?php echo $Campsite['WEBSITE_URL']; ?>/javascript/json2.js"></script>
	<script type="text/javascript" src="<?php echo $Campsite['WEBSITE_URL']; ?>/javascript/jquery/jquery-1.4.2.min.js"></script>

	<script type="text/javascript">

var map_preview_close = function()
{
    try {window.close();} catch (e) {}
};


	</script>


<?php

$f_languageId = 1;

$f_articles = array();
$f_articles = array(34, 35, 61);
//$f_articles = array(34);
$f_issues = array(2);
//$f_sections = array(10, 60);
$f_sections = array(10);
$f_dates = array("2000-10-20", "2020-10-10");
$f_topics = array();
//$f_topics = array(23);

$f_areas = array();
//$f_areas = array("rectangle" => array(array("longitude" => 150, "latitude" => -90), array("longitude" => -20, "latitude" => 60)));

//$f_multimedia = array();
//$f_multimedia = array("image" => false, "video" => false, "any" => false);
$f_multimedia = array("image" => false, "video" => false, "any" => true);

$f_mapWidth = 800;
$f_mapHeight = 600;

$constraints = array(
    "articles" => $f_articles,
    "issues" => $f_issues,
    "sections" => $f_sections,
    "dates" => $f_dates,
    "topics" => $f_topics,
    "areas" => $f_areas,
    "multimedia" => $f_multimedia,
);

echo Geo_Map::GetMultiMapTagHeader($f_languageId, $constraints, $f_mapWidth, $f_mapHeight);
?>
</head>
<body onLoad="return false;">
<div class="map_preview clearfix">
<!--Toolbar-->
<div id="map_toolbar_part" class="toolbar clearfix map_preview_toolbar">

    <div class="save-button-bar">
        <input id="map_button_close" type="submit" onClick="map_preview_close(); return false;" class="default-button" value="<?php putGS("Close"); ?>" name="close" />
    </div>
    <div id="map_preview_info" class="map_preview_info">
      <?php putGS("Map preview"); echo " - " . "Multimap"; ?>
    </div>
    <!-- end of map_save_part -->
  </div>
<!--END Toolbar-->
</div>
<!-- Map Preview Begin -->
<div class="geomap_container">
  <div class="geomap_locations">
    <?php echo Geo_Map::GetMultiMapTagList($f_languageId, $constraints); ?>
  </div>
  <div class="geomap_menu">
    <a href="#" onClick="<?php echo Geo_Map::GetMultiMapTagCenter($f_languageId); ?> return false;"><?php putGS("show initial map view"); ?></a>
  </div>
  <div class="geomap_map">
    <?php echo Geo_Map::GetMultiMapTagBody($f_languageId); ?>
  </div>
</div>
<div style="clear:both" ></div>
<!-- Map Preview End //-->
</body>
</html>
