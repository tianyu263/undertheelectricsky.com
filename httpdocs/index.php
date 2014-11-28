<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Under the Electric Sky</title>
        <meta name="description" content="The life of festival goers during Electric Daisy Carnival Las Vegas, the largest music festival in the US.">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="css/main.min.css">
    </head>
    <body>
    	<div id="nav">
    		<div class="wrapper">
    			<h1 id="nav-home">Under the Electric Sky</h1>
    			<ul id="nav-social">
	    			<li id="nav-facebook" class="nav-item nav-social">
		    			<a href="https://www.facebook.com/electricdaisycarnival" target="_blank" class="link">Facebook</a>
		    		</li>
		    		<li id="nav-twitter" class="nav-item nav-social">
		    			<a href="https://twitter.com/edc_lasvegas" target="_blank" class="link">Twitter</a>
		    		</li>
	    		</ul>
	    		<ul id="nav-links">
	    			<li id="nav-synopsis" class="nav-item triangle hover">
	    				<a href="#synopsis" class="link">Synopsis</a>
	    			</li>
	    			<li id="nav-gallery" class="nav-item triangle hover">
		    			<a href="#gallery" class="link">Photo Gallery</a>
		    		</li>
	    		</ul>
    		</div>
    	</div>
    	<div id="intro">
    		<div class="wrapper">
    			<img id="intro-title" class="intro-image" src="/images/title.png"/>
    			<img id="intro-cover" class="intro-image" src="/images/fireworks.jpg"/>
    			<div class="clear"></div>
    		</div>
    	</div>
    	<div id="synopsis">
    		<div class="wrapper">
    			<h2 class="header">Synopsis</h2>
	    		<p>This 3D film chronicles the love, community and life of festival goers during Electric Daisy Carnival Las Vegas, the largest music festival in the US. Behind-the-scenes footage and exclusive interviews with Insomniac's Pasquale Rotella reveal the magic that makes this three-night, 345,000-person event a global phenomenon.</p>
    		</div>
    	</div>
    	<div id="gallery">
    		<div class="wrapper">
    			<h2 class="header">Photo Gallery</h2>
    			<ul id="gallery-thumbnails">
	    			<?php for($i=1; $i<=6; $i++) {?>
	    			<li class="thumbnail hover">
		    			<img src="/images/gallery/thumbnails/<?php echo $i;?>.jpg"/>
	    			</li>
	    			<?php }?>
	    		</ul>
    		</div>
    	</div>
<!--
    	<div id="gallery-wrapper" class="wrapper">
    		<div id="gallery">
	    		<h2 class="header">Photo Gallery</h2>
	    		<ul id="gallery-thumbnails">
	    			<?php for($i=1; $i<=6; $i++) {?>
	    			<li class="thumbnail hover">
		    			<img src="/images/gallery/thumbnails/<?php echo $i;?>.jpg"/>
	    			</li>
	    			<?php }?>
	    		</ul>
    		</div>
    	</div>
-->
		<div id="footer">
			<div class="wraper">
				<h3 id="footer-title">Under the Electric Sky</h3>
				<div id="footer-billing">
					<img id="billing-image" src="/images/footer-billing.png"/>
					<a id="billing-insomniac" href="http://insomniac.com/" target="_blank">insomniac</a>
					<a id="billing-link" href="http://www.edcthemovie.com" target="_blank">www.edcthemovie.com</a>
				</div>
			</div>
		</div>
<!--
    	<div id="footer-wrapper" class="wrapper">
    		<div id="footer">
    			<div id="footer-logo">Under the Electric Sky</div>
    			<img id="footer-billing" src="/images/footer-billing.png"/>
    			<a id="footer-insomniac" href="http://insomniac.com/" target="_blank">insomniac</a>
    			<a id="footer-link" href="http://www.edcthemovie.com" target="_blank">www.edcthemovie.com</a>
    		</div>
    	</div>
-->
    	<script src="js/main.min.js"></script>
      <!-- ADD GOOGLE ANALYTICS -->
    </body>
</html>