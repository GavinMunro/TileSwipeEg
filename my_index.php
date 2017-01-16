<!doctype html>
<html lang="en">
  <meta charset="utf-8">
  <title>jQuery Mobile UI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php

ini_set(display_errors, off);
ini_set(error_reporting, 8191);
ini_set(log_errors, on);
ini_set(error_log, '/xampp/localhost/...');

ini_set(allow_url_fopen, off);    #this directive is set to on by default.
#int_set(allow_url_include);      #this directive is set to off by default

#$db = mysql($database_name, $query, $link_identifier);
$db =  mysql_connect('localhost', 'kevin', 'swordfish');
if( mysql_select_db('SwipeDB', $db) )
    { continue; }
else 
    { echo 'SwipeDB not created or not connected'; }
?>


<!-- 
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css" />   
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css">
 -->
<link rel="stylesheet" href="../css/tiles.css" />
<link rel="stylesheet" href="../css/jquery.mobile-1.2.1.css" />
<link rel="stylesheet" href="../css/desert.theme.css" />
<link rel="stylesheet" href="../css/jquery.mobile.structure-1.2.1.min.css" />

  <!--[if lt IE9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- The script included above, by conditional directive, is for MS IExplorer9 -->

<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
<script src="../js/draggable.js"></script>

</head>

<body>
    
<div data-role="page" id="page1">

  <div data-role="header" data-theme="a">
    <div data-role="navbar" data-iconpos="top">
	<ul>
	<li><a href="#page1" data-transition="fade" data-icon="home" >
		Home</a>
	</li>
	<li><a href="#page1" data-transition="fade"  data-icon="gear">
		New Game</a>
	</li>
	<li><a href="#page1" data-transition="fade"  data-icon="save">
		Save</a>
	</li>
	<li><a href="#page1" data-transition="fade"  data-icon="info">
		Info</a>
	</li>
	</ul>
    </div>
  </div><!-- </header -->

  <h2 style="text-align:center;">Choose your favourite and drag to the centre.</h2>
    
<!-- 
<script>
$(function() {
$( "#sortable" ).sortable();
$( "#sortable" ).disableSelection();
});
</script>
    
<div id="droppable" class="ui-widget-header">Drop here</div>
<div id="draggable">Drag me</div>
-->


  <div data-role="content">

	<table style="width:100%">
	<tr>
	<td style="width:33%"></td>
	<td style="width:34%">
	  <div id="board" data-divider-theme="b" data-inset="true">
	  
	  <table>
	  <tr>
	    <td><div id="slot1"><div id="draggable" class="draggable ui-widget-content"></div></div></td>
	    <td><div id="slot2"><div id="draggable" class="draggable ui-widget-content"></div></div></td>
	    <td><div id="slot3"><div id="draggable" class="draggable ui-widget-content"></div></div></td>
	  </tr>
	  <tr>
	    <td><div id="slot4"><div id="draggable" class="draggable ui-widget-content"></div></div></td>
	    <td><div id="slot5"><div id="droppable"></div></div></td>
	    <td><div id="slot6"><div id="draggable" class="draggable ui-widget-content"></div></div></td>
	  </tr>
	  <tr>
	    <td><div id="slot7"><div id="draggable" class="draggable ui-widget-content"></div></div></td>
	    <td><div id="slot8"><div id="draggable" class="draggable ui-widget-content"></div></div></td>
	    <td><div id="slot9"><div id="draggable" class="draggable ui-widget-content"></div></div></td>
	  </tr>
	  </table>
	  
	  </div>
	</td>
	<td style="width:33%"></td>
	</tr>
	</table> 
   
  </div><!-- </content -->
  
  <!-- Update the user_choice div with the name of the tile chosen. -->
  <div data-theme="a" data-role="footer" data-position="fixed">
	  <div id="user_choice"><h2>You chose:    </h2></div>
  </div><!-- </footer -->

</div><!-- </page -->

<?php 
$custChoice = mysql_real_escape_string($_POST['user_choice'], $db);

$queryResult = mysql_query(
"INSERT INTO table game (session, cust, ip, response) 
VALUES ('{$session}', '{$user}', '{$user_ip}', '{$custChoice}' 
)"                        );
if ($queryResult) {
	echo 'Success';
}
else {
	echo 'DB update operation failed.';
}
?>

</body>
</html>

