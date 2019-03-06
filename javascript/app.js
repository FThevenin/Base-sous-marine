$(document).ready(function(){
		
        $('#slide1').parallax("center", 0, 0.1, true);
        $('#slide2').parallax("center", 900, 0.1, true);
        $('#slide3').parallax("center", 2900, 0.1, true);
    })


(function( $ ){
$.fn.parallax = function(xpos, adjuster, inertia, outerHeight) {

function inView(pos, element){

element.each(function(){ 

var element = $(this);
var top = element.offset().top;

if(outerHeight == true){
var height = element.outerHeight(true);
}else{
var height = element.height();
}

//above & in view
if(top + height >= pos && top + height - windowHeight < pos){
move(pos, height);
}

//full view
if(top <= pos && (top + height) >= pos && (top - windowHeight) < pos && top + height - windowHeight > pos){
move(pos, height);
}

//below & in view
if(top + height > pos && top - windowHeight < pos && top > pos){
move(pos, height);
}
});
}

var $window = $(window);
var windowHeight = $(window).height();
var pos = $window.scrollTop(); //position of the scrollbar
var $this = $(this);

//setup defaults if arguments aren't specified
if(xpos == null){xpos = "50%"}
if(adjuster == null){adjuster = 0}
if(inertia == null){inertia = 0.1}
if(outerHeight == null){outerHeight = true}

height = $this.height();
$this.css({'backgroundPosition': newPos(xpos, outerHeight, adjuster, inertia)});

function newPos(xpos, windowHeight, pos, adjuster, inertia){
return xpos + " " + Math.round((-((windowHeight + pos) - adjuster) * inertia)) + "px";
}

//function to be called whenever the window is scrolled or resized
function move(pos, height){
$this.css({'backgroundPosition': newPos(xpos, height, pos, adjuster, inertia)});
}

$window.bind('scroll', function(){ //when the user is scrolling...
var pos = $window.scrollTop(); //position of the scrollbar
inView(pos, $this);

$('#pixels').html(pos);
})
}
})( jQuery );