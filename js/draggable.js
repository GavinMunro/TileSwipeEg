/* Methods from doco at  http://api.jqueryui.com/droppable/
*/

$( "#draggable" ).draggable(); // Here lieth the constructor?

$( "#droppable" ).droppable({
    drop: function() {
        alert( "dropped" );
    }
});
$( "#droppable" ).css('background-image', url('../assets/img/tile9_camera.png'));


//$(function() {
$( "#sortable" ).sortable({
revert: true
});

$( "#draggable" ).draggable({
connectToSortable: "#sortable",
helper: "clone",
revert: "invalid"
});

$( "ul, li" ).disableSelection();
//   });

/*
//Initialize the draggable with the create callback specified:
$( ".selector" ).draggable({
	create: function( event, ui ) {}
	});

//Containment of dragging
$( ".selector" ).draggable({ containment: "parent" });


//The distance in pixels from the snap element edges at which snapping should occur
$( ".selector" ).draggable({ snapTolerance: 20 });

//Init to snap to other draggable elements
$( ".selector" ).draggable({ snap: true });
//getter
var snapMode = $( ".selector" ).draggable( "option", "snapMode" );
//setter
$( ".selector" ).draggable( "option", "snapMode", "inner" );


//Initialize the draggable with the grid option specified:
$( ".selector" ).draggable({ grid: [ 50, 20 ] });

//Bind an event listener to the drag event:
$( ".selector" ).on( "drag", function( event, ui ) {} );

//Initialize the draggable with the drag callback specified
$( ".selector" ).draggable({
	drag: function( event, ui ) {}
	});

//Bind an event listener to the dropcreate event:
$( ".selector" ).on( "dropcreate", function( event, ui ) {} );


//Initialize the draggable with the start callback specified:
$( ".selector" ).draggable({
	start: function( event, ui ) {}
	});

//Finalize the draggable with the stop callback specified:
$( ".selector" ).draggable({
	stop: function( event, ui ) {}
	});
*/
