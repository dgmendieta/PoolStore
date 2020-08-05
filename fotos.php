<?php
  include "includes/conexion.inc";
  ?>

<!DOCTYPE HTML>

<head>
       
      <meta http-equiv="content-type" content="text/html" />
      <meta charset="utf-8"/>
      <meta property="og:locale" content="es_ES" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="Pool Store - Uruguay - Viva plenamente su Piscina" />
      <meta property="og:description" content="Pool Store Uruguay. Importador y distribuidor de todo lo que necesita para vivir plenamente su piscina. 
        Mantenimientos, Servicio Técnico, Entregas a domicilio." />
      <meta property="og:url" content="http://poolstore.com.uy/" />
      <meta property="og:site_name" content="Pool Store Uruguay - Viva plenamente su Piscina" />
      <meta name="keywords" content="piscinas,piscinas uy,piscinas uruguay,piscinas productos,piscinas mantenimiento,piscinas equipos,piscinas cloradores" />
      <meta name="author" content="Pool Store Uruguay - Mantenimientos, Equipos, Químicos, Reparaciones, Accesorios, Calefacción" />

      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link href="css/bootstrap.css" rel="stylesheet"/>
      <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
<title>Pool Store - Galería</title>


<style>

body {
  margin: 0;
  padding: 0;
  background: #000;
  }
#galleryContainer {
  width: 100%;
  height: 800px;        
  overflow: hidden;
  position: absolute;
  top: 50;
  bottom: 0;
  margin-top: auto;
  margin-bottom: auto;
  z-index: 1;
}
#gallery {
  width: 100px;
  height: 700px;        
  padding: 50px 0;
  position: absolute;
  z-index: 1;
}
#gallery img {
  float: left;
  height: 600px;
  margin: 0 100px;      
  -webkit-box-reflect:
    below
    0
    -webkit-gradient(
      linear,
      left top,
      left bottom,
      color-stop(1, rgba(255, 255, 255, .5)),
      color-stop(.8, rgba(255, 255, 255, 0))
    );
}
#leftButton, #rightButton {
  position: absolute;
  z-index: 2;
  top: -100px;
  bottom: 0;
  padding: 0;
  margin: auto 0;
  width: 15%;
  height: 600px;        
  border: none;
  outline: none;
  color: #fff;
  background: transparent url(images/blank.gif);
  font-size: 100px;
  font-family: "Courier New", courier, fixed;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity .5s;
  -moz-transition: opacity .5s;
  -o-transition: opacity .5s;
  transition: opacity .5s;
}
#leftButton {
  left: 0;
}
#rightButton {
  right: 0;
}
#leftButton::-moz-focus-inner, #rightButton::-moz-focus-inner {
  border: none;
}
#leftButton:hover, #rightButton:hover {
  opacity: .5;
  filter: alpha(opacity=50);
  outline: none;
}
#caption {
  position: absolute;
  z-index: 2;
  bottom: 90px;
  width: 100%;
  color: #ffc;
  text-align: center;
  font-family: "Georgia", serif;
  font-size: 24px;
  letter-spacing: .1em;
  display: none;
}
#loading {
  position: absolute;
  z-index: 1;
  bottom: 50%;
  width: 100%;
  color: #ffc;
  text-align: center;
  font-family: "Georgia", serif;
  font-size: 36px;
  letter-spacing: .1em;

#info {
  color: #ffc;
  position: fixed;
  opacity: 0;
  filter: alpha(opacity=0);
}
  bottom: 20px;
  right: 20px;
  z-index: 99;
  border: none;
  border-radius: 20px;
  padding: 20px;
  background: transparent;
  -webkit-transition: background-color .5s;
  -moz-transition: background-color .5s;
  -o-transition: background-color .5s;
  transition: background-color .5s;
  font-size: 70%;
}
#info>* {
  margin: 20px 40px 30px 0;
  cursor: default;
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  -webkit-transition: opacity .5s;
  -moz-transition: opacity .5s;
  -o-transition: opacity .5s;
  transition: opacity .5s;
  zoom: 1;  /* Force elements to be positioned in IE7, otherwise opacity doesn't work! */
}
#info p {
  opacity: 0;
  filter: alpha(opacity=0);
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
}
#info h1 {
  position: fixed;
  z-index: 99;
  margin: 0;
  padding: 17px 1px 4px 14px;
  right: 30px;
  bottom: 30px;
  width: 20px;
  height: 14px;
  font-size: 20px;
  border: 3px solid #ffc;
  line-height: 1px;
  border-radius: 20px;
  color: #ffc;
  opacity: .5;
  filter: alpha(opacity=50);
}
#info:hover, #info.hover {
  background: rgba(50,50,50,.6);
}
#info:hover *, #info.hover * {
  opacity: 1;
  filter: alpha(opacity=100);
  color: #ffc;
}
#info a {
  color: #ffc;
}

</style>


<!-- IE7 positions the buttons incorrectly; compensate -->

<!--[if lt IE 8]>
<style>
#leftButton, #rightButton {
  top: 50px;
}
</style>
<![endif]-->


<!-- IE7/8 spectacularly fail to cope with fading in a semitransparent background on hover; use an opaque bg instead -->

<!--[if lt IE 9]>
<style>
#info:hover, #info.hover {
  background: rgb(50,50,50);
}
</style>
<![endif]-->

 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
 <script src="js/bootstrap.min.js"></script>
 <script src="js/control.js"></script>  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jswipe-0.1.2.js"></script>
<script type="text/javascript">


var preloadSlides = 3;                
var loadingMessageDelay = 2000;       
var loadingMessageSpeed = 1200;       
var loadingMessageMinOpacity = 0.4;   
var loadingMessageMaxOpacity = 1;     
var captionSpeed = 1200;              
var captionOpacity = 0.5;             
var swipeXThreshold = 30;             
var swipeYThreshold = 90;             
var leftKeyCode = 37;                 
var rightKeyCode = 39;                
var currentSlideOpacity = 1.0;        
var backgroundSlideOpacity = 0.5;     


var slideHorizMargin = 0;             
var buttonHeight = 0;                 
var currentSlide = 0;                 
var totalSlides = 0;                  
var slides = new Array();             
var slideWidths = new Array();        
var slideLoaded = new Array();        
var loading = true;                   

$( init );



function init() {

  
  slideHorizMargin = parseInt( $('#gallery img').css('margin-left') );

  
  $('#gallery').fadeTo( 0, 0 );
  $('#gallery').css('top','-999em');
  buttonHeight = $('#leftButton').css('height');
  $('#leftButton').css('height',0);
  $('#rightButton').css('height',0);

  $('#loading').delay( loadingMessageDelay );
  fadeInLoadingMessage();

  
  $('#gallery img').load( handleSlideLoad );


  $('#gallery img').each( function() {
    $(this).hide();
    $(this).data( 'slideNum', totalSlides );
    slides[totalSlides++] = $(this);
    if ( this.complete ) $(this).trigger("load");
    $(this).attr( 'src', $(this).attr('src') );
  } );

  
  $(window).resize( centreCurrentSlide ); 

  
  setButtonStates();

  
  $('#caption').html( slides[currentSlide].attr('alt') );

    
  if ( !$.browser.msie ) {

    $('#gallery').swipe( {
         swipeLeft: moveRight,
         swipeRight: moveLeft,
         threshold: { x:swipeXThreshold, y:swipeYThreshold }
    } );
  }

  
  $(document).keydown( function(event) {
    if ( event.which == leftKeyCode ) moveLeft();
    if ( event.which == rightKeyCode ) moveRight();
  } );

  
  $('#info').bind( 'touchstart', function() { $(this).toggleClass('hover'); } );
}




function handleSlideLoad() {

  
  slideWidths[$(this).data('slideNum')] = $(this).width();

  
  $('#gallery').width( $('#gallery').width() + $(this).width() + slideHorizMargin*2 );

  // Record the fact that this slide has loaded in the slideLoaded array
  slideLoaded[$(this).data('slideNum')] = true;

  // Are we still preloading the slides?

  if ( loading ) {

    // Yes: Calculate how many slides we've now preloaded

    var preloaded = 0;

    for ( var i=0; i < preloadSlides; i++ ) {
      if ( slideLoaded[i] ) preloaded++;
    }

    // If we've preloaded enough slides, fade in the gallery and enable the left/right buttons

    if ( preloaded == preloadSlides || preloaded == totalSlides ) {
      $('#loading').clearQueue().stop().fadeTo('slow', 0 );
      $('#gallery').css('top',0);
      $('#gallery').fadeTo('slow', 1 );
      $('#leftButton').css('height',buttonHeight);
      $('#rightButton').css('height',buttonHeight);
      $('#rightButton').show();
      addSlideHover();
      loading = false;
    }
  }

  // If this newly-loaded slide is the first slide in the gallery,
  // centre it in the browser viewport and set its opacity to currentSlideOpacity.
  // Otherwise, set its opacity to backgroundSlideOpacity.

  if ( $(this).data('slideNum') == 0 ) {
    centreCurrentSlide();
    $(this).fadeTo( 'slow', currentSlideOpacity );
  } else {
    $(this).fadeTo( 'slow', backgroundSlideOpacity );
  }

}


// Move one slide to the left by sliding the gallery left-to-right

function moveLeft() {

  // Don't move if this is the first slide, or if we don't yet have a width for the previous slide
  if ( currentSlide == 0 ) return;
  if ( slideWidths[currentSlide-1] == undefined ) return;

  // Cancel all event handlers on the current slide
  slides[currentSlide].unbind('mouseenter').unbind('mouseleave').unbind('touchstart');

  // Stop any fades on the caption and hide it
  $('#caption').stop().clearQueue().hide();

  // Slide the whole gallery right so that the previous slide is now centred
  var offset = slideWidths[currentSlide]/2 + slideHorizMargin*2 + slideWidths[currentSlide-1]/2;
  $('#gallery').animate( { left: '+=' + offset } );

  // Fade the old slide to backgroundSlideOpacity, and the new slide to currentSlideOpacity
  slides[currentSlide].animate( { opacity: backgroundSlideOpacity } );
  slides[currentSlide-1].animate( { opacity: currentSlideOpacity } );

  // Update the current slide index
  currentSlide--;

  // Update the shown/hidden states of left/right buttons as appropriate
  setButtonStates();

  // Set the caption to the new current slide's alt text,
  // and attach the hover events to the new slide
  $('#caption').html( slides[currentSlide].attr('alt') );
  addSlideHover();
}


// Move one slide to the right by sliding the gallery right-to-left

function moveRight() {

  // Don't move if this is the final slide, or if we don't yet have a width for the next slide
  if ( currentSlide == totalSlides - 1 ) return;
  if ( slideWidths[currentSlide+1] == undefined ) return;

  // Cancel all event handlers on the current slide
  slides[currentSlide].unbind('mouseenter').unbind('mouseleave').unbind('touchstart');

  // Stop any fades on the caption and hide it
  $('#caption').stop().clearQueue().hide();

  // Slide the whole gallery left so that the next slide is now centred
  var offset = slideWidths[currentSlide]/2 + slideHorizMargin*2 + slideWidths[currentSlide+1]/2;
  $('#gallery').animate( { left: '-=' + offset } );

  // Fade the old slide to backgroundSlideOpacity, and the new slide to currentSlideOpacity
  slides[currentSlide].animate( { opacity: backgroundSlideOpacity } );
  slides[currentSlide+1].animate( { opacity: currentSlideOpacity } );

  // Update the current slide index
  currentSlide++

  // Update the shown/hidden states of left/right buttons as appropriate
  setButtonStates();

  // Set the caption to the new current slide's alt text,
  // and attach the hover events to the new slide
  $('#caption').html( slides[currentSlide].attr('alt') );
  addSlideHover();
}


// Centre the current slide horizontally in the viewport

function centreCurrentSlide() {

  // Work out how far the left edge of the slide is from the
  // left hand edge of the gallery div

  var offsetFromGalleryStart = 0;

  for ( var i=0; i<currentSlide; i++ ) {
    offsetFromGalleryStart += slideWidths[i] + slideHorizMargin*2;
  }

  // Find the horizontal centre of the browser window
  var windowCentre = $(window).width() / 2;

  // Compute the left position of the slide based on the window centre and slide width
  var slideLeftPos = windowCentre - ( slideWidths[currentSlide] / 2 );

  // Compute the offset for the gallery div based on the slide position and
  // the slide offset from the gallery start. Also allow for the
  // horizontal margin on the left side of the slide.
  var offset = slideLeftPos - offsetFromGalleryStart - slideHorizMargin;

  // Move the gallery div to the new offset
  $('#gallery').css( 'left', offset );
}


// Show or hide the left and right buttons depending on the current slide:
// 1. If we're showing the first slide, hide the left button
// 2. If we're showing the last slide, hide the right button

function setButtonStates() {

  if ( currentSlide == 0 ) {
    $('#leftButton').hide();
  } else {
    $('#leftButton').show();
  }

  if ( currentSlide == totalSlides - 1 ) {
    $('#rightButton').hide();
  } else {
    $('#rightButton').show();
  }

}

// Attach mouseenter and mouseleave event handlers to the current slide to fade the caption in and out
// However, if the device supports touch events then fade the caption in/out when the slide is touched

function addSlideHover() {

  if ( 'ontouchstart' in document.documentElement ) {
    slides[currentSlide].bind( 'touchstart', function() {
      if ( $('#caption').is(':visible') ) {
        $('#caption').stop().clearQueue().fadeOut( captionSpeed );
      } else {
        $('#caption').stop().clearQueue().fadeTo( captionSpeed, captionOpacity );
      }
    } );
  } else {
    slides[currentSlide].hover(
      function() { $('#caption').stop().fadeTo( captionSpeed, captionOpacity ) },
      function() { $('#caption').stop().fadeTo( captionSpeed, 0 ) }
    );
  }
}


// Functions to pulse the loading message

function fadeInLoadingMessage() {
  $('#loading').animate( { opacity: loadingMessageMaxOpacity }, loadingMessageSpeed, 'swing', fadeOutLoadingMessage );
}

function fadeOutLoadingMessage(){
  $('#loading').animate( { opacity: loadingMessageMinOpacity }, loadingMessageSpeed, 'swing', fadeInLoadingMessage );
}


</script>

</head>

<body>
<?php 
  include "includes/menu.inc";
  ?>
  <button id="leftButton" onclick='moveLeft()'>&lt;</button>
  <button id="rightButton" onclick='moveRight()'>&gt;</button>
  <div id="galleryContainer">
    <div id="gallery">
    <?php 
    
    $sql = "SELECT * FROM galeria";
    $datos = mysqli_query ($conectar,$sql);
    
    while ($imagenes = mysqli_fetch_array($datos)) {
                 
                 $ref         =             $imagenes["rutaGaleria"];
                 $nombre       = utf8_encode($imagenes["tituloGaleria"]);
                    
       
    echo "<img src='$ref' alt='$nombre'/>\n";
   
    } // end while (siguiente registro)

                // CERRAR CONEXION
                mysqli_close($conectar);
                    
    
   ?>
      <!--<img src="slides/BarbedWire.jpg" alt="Barbed Wire" />
      <img src="slides/Feather.jpg" alt="Feather" />
      <img src="slides/DriftStuff.jpg" alt="Drift Stuff" />
      <img src="slides/Driftwood.jpg" alt="Driftwood" />
      <img src="slides/DriftwoodGuy.jpg" alt="Driftwood and Guy" />
      <img src="slides/GrassLight.jpg" alt="Grass and Light" />
      <img src="slides/PebbleAndShells.jpg" alt="Pebble and Shells" />
      <img src="slides/StickSea.jpg" alt="Stick and Sea" />
      <img src="slides/SeaweedGasmask.jpg" alt="Seaweed Gasmask" />
      <img src="slides/Surfers.jpg" alt="Surfers" />-->
    </div>
    <div id="caption">Photo Caption</div>
    <div id="loading">Please wait...</div>
  </div>

  <!--<div id="info">
    <h1>i</h1>
    <h2>Elegant Sliding Image Gallery with jQuery</h2>

    <p>&copy; Elated.com | <a href="http://www.elated.com/articles/elegant-sliding-image-gallery-with-jquery/">Back to Tutorial</a></p>
    
    <p style="font-size: .8em; line-height: 1.5em;"><a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0; float: left; margin: 1px 8px 0 0;" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a>This <span xmlns:dc="http://purl.org/dc/elements/1.1/" href="http://purl.org/dc/dcmitype/Text" rel="dc:type">work</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.elated.com/" property="cc:attributionName" rel="cc:attributionURL">http://www.elated.com/</a> is licensed under a<br> <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.</p>
  </div>-->

</body>
</html>

