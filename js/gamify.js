/**
 *  Note: $(document).ready(function() and pagecreate are deprecated
 *  New way is to use  $(document).bind('pageinit')
 */

//Randomn number generator for initializing the board
function randomToN(maxVal) {
    var randVal = Math.random() * maxVal;
    return typeof 0 == 'undefined' ? Math.round(randVal) : randVal.toFixed(0);
};

$( "#board" ).board() {
    var images = ['tile1_music.png','tile2_sports.png','tile3_games.png', 
                  'tile4_reading.png', 'tile5_computers.png', 'tile6_tv.png', 
                  'tile7_gym.png', 'tile8_boats.png', 'tile9_camera.png'];
    
	//ram = images[parseFloat(randomToN(images.length))] // Random 1 to n
	//img = ram == undefined || ram == null ? images[i] : ram; // Detect null
	
	//Populate the table in div "board" now 
	//Note tile9 is not included as it is the camera icon which
	//is the droppable area in the center
	for ( var i = 1; i < 9; i++ ) {
	    img = images[i]
	    $("#slot"+str(i)).css("backgroundImage", "url(" + img + ")"); // set background
	}
}


//$(this).css('background-image', image_name);


	$( "div" ).each(function( i ) {
	    //$("#board").each().
	    //$(this).images[i]; //my list of image files;
	});


$(".selector").css('backgroundImage','url(../assets/images/' + images[i] +')');


$( "#draggable" ).draggable();
$(function() {
$( "#draggable" ).draggable({ containment: "#containment-wrapper", scroll: false });
//$( "#draggable" ).draggable({ containment: "parent" });
});


$( "#droppable" ).droppable({
    drop: function() {
	    alert( "dropped" );
	    //Trigger user selection here
	}
});
$( "#droppable" ).css('background-image', url('../assets/img/tile9_camera.png'));







/*
 * Unused sample code from stackoverflow etc.
 * 

$(window).load(function() {          
  var i =0;
  var images = ['tile1_music.png','tile2_sports.png','tile3_games.png', 
                'tile4_reading.png', 'tile5_computers.png', 'tile6_tv.png', 
                'tile7_gym.png', 'tile8_boats.png', 'tile9_camera.png'];
  var image = $('#tiles');
                //Initial Background image setup
  image.css('background-image', 'url(image1.png)');
                //Change image at regular intervals
  setInterval(function(){  
   image.fadeOut(1000, function () {
   image.css('background-image', 'url(' + images [i++] +')');
   image.fadeIn(1000);
   });
   if(i == images.length)
    i = 0;
  }, 5000);           
});



$(document).ready(function(){
    $(".button").click(function () {
    	$(this).children(".arrow").toggle();
            return false;
    });
});


$('.mydiv').click(function() {
	    if ($(this).css('background-image').replace(/"/g, '') == original_image) {
	        $(this).css('background-image', second_image);
	    } else {
	        $(this).css('background-image', original_image);
	    }

		return false;
	});


function randomToN(maxVal) {
    var randVal = Math.random() * maxVal;
    return typeof 0 == 'undefined' ? Math.round(randVal) : randVal.toFixed(0);
};
// From stackoverflow AlejoNext answered May 15 '12 at 0:47
var list = [ "IMG0.EXT", "IMG2.EXT","IMG3.EXT" ], // Images
    ram = list[parseFloat(randomToN(list.length))], // Random 1 to n
    img = ram == undefined || ram == null ? list[0] : ram; // Detect null
$("div#ID").css("backgroundImage", "url(" + img + ")"); // push de background

*
*
*/

