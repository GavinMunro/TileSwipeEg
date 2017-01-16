<!doctype html>
<html lang="en">
  <meta charset="utf-8">
  <title>jQuery Mobile UI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" /> 
                    <!-- href="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.css" /> -->
   
  <!--[if lt IE9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- The script included above by conditional directive is for MS IExplorer9 -->
  <!-- See below for other scripts, placed at end of body so pages load faster -->
</head>

<body>

<div data-role="page" id="page1">

  <div data-role="header" data-theme="a">
    <div data-role="navbar" data-iconpos="top">
	<ul>
	<li><a href="#page1" data-transition="fade"  data-icon="home">
		Home</a>
	</li>
	<li><a href="#page1" data-transition="fade"  data-icon="star">
		New Game</a>
	</li>
	<li><a href="#page1" data-transition="fade"  data-icon="info">
		Info</a>
	</li>
	<li><a href="#page1" data-transition="fade"  data-icon="check">
		Save</a>
	</li>
	</ul>
    </div>
  </div><!-- </header -->

  <h2>Choose your favourite and move it to the middle.
  </h2>

  <div data-role="content">
	<ul data-role="listview" data-divider-theme="b" data-inset="true">
	<li data-theme="b">
  <fieldset class="ui-grid-b">
    <div class="ui-block-a"><input value="Hmm" type="button"></div>
    <div class="ui-block-b"><input value="No" type="reset"></div>
    <div class="ui-block-c"><input value="Yes" type="submit"></div>
  </fieldset>
	</li>
	<li data-theme="b">
  <fieldset class="ui-grid-b">
    <div class="ui-block-a"><input value="Hmm" type="button"></div>
    <div class="ui-block-b"><input value="No" type="reset"></div>
    <div class="ui-block-c"><input value="Yes" type="submit"></div>
  </fieldset>
	</li>
	<li data-theme="b">
  <fieldset class="ui-grid-b">
    <div class="ui-block-a"><input value="Hmm" type="button"></div>
    <div class="ui-block-b"><input value="No" type="reset"></div>
    <div class="ui-block-c"><input value="Yes" type="submit"></div>
  </fieldset>
	</li>
	</ul>

  </div><!-- </content -->

  <div data-role="content">
	<ul data-role="listview" data-divider-theme="c" data-inset="true">
	<li data-theme="b">
		Choice: 
	</li>
	</ul>
  </div>
    
	<div data-theme="a" data-role="footer" data-position="fixed">
	  <h2> 
	    <a href="#" style="color:White; font-size:small">Gavin A.I. Munro</a> 
	  </h2>
	</div>

</div><!-- </page -->

    <script src="js/scripts.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</body>
</html>
