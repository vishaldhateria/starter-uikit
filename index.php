<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- Include Google Analytics-->

<!-- Include Hotjar Analytics -->
<!-- meta tags for SEO-->
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name=viewport content="width=device-width, initial-scale=1">
<META NAME="geo.position" CONTENT="latitude; longitude">
<META NAME="geo.placename" CONTENT="Place Name">
<META NAME="geo.region" CONTENT="Country Subdivision Code">
<meta name="keywords" 
         content="">

<meta name="description" content="">

<!-- Twitter Meta Tags -->
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">
<meta name="twitter:card" content="">

<!-- Meta Tags For Social Media-->
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta property="og:url" content="">

<!-- Our Main Stylesheet-->
 <link rel="stylesheet" type="text/css" href="scss/main.css">

</head>
<body>

<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav ">
        	<li><a href="#offcanvas-slide" uk-toggle>
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></a>
        </li>

            <li class="uk-active"><a href="#">Active</a></li>
            

            <li><a href="#">Item</a></li>

        
   
        </ul>

    </div>
</nav>

<div id="offcanvas-slide" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-default uk-visible@m">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>


    </div>
</div>

<div class="uk-cover-container uk-height-large" >
	<div id="overlay" style="
    position:absolute;
    float:left;
    width:100%;
    min-height:500px;
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e5799+0,2989d8+100,207cca+100,7db9e8+100 */
    background: rgba(30, 87, 153, 0.55); /* Old browsers */
    background: -moz-linear-gradient(left, #1e5799 0%, #2989d8 100%, #207cca 100%, #7db9e8 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, rgba(30, 87, 153, 0.45) 0%,#2989d8 100%,rgba(32, 124, 202, 0.26) 100%,#7db9e8 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, rgba(30, 87, 153, 0.64) 0%,rgba(41, 137, 216, 0.65) 100%,rgba(32, 124, 202, 0.39) 100%,rgba(125, 185, 232, 0.81) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 */
    z-index:10;"></div>
  
    <video autoplay loop muted playsinline uk-cover>
        <source src="vk.mp4" type="video/mp4">
    </video>
</div>
<h1 class="uk-align-center uk-heading-primary ">Heading</h1>
<hr class="uk-divider-icon">
<div class="uk-section uk-section-primary uk-preserve-color">
<div class="uk-container">
<div class="uk-child-width-expand@s" uk-grid>
	    <div>
        <h3>Heading</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>
    <div class="uk-grid-item-match">
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <h3>Heading</h3>
            <p>
                Lorem ipsum dolor sit amet.
            </p>
        </div>
     </div></div>
</div>
</div>

<a href="#" uk-totop uk-scroll></a>

<!-- UIkit JS -->
<script src="js/icon.js"></script>
<script src="js/main.js"></script>
</body>
</html>