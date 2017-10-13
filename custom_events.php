<?php
/*
 * Template Name: Custom Events Page
 * Description: Custom Events Page
 */
?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">	
		<script>
		function showArtist(str) {
		    if (str.length == 0) {
		        document.getElementById("infoEvent").innerHTML = "";
		        return;
		    } else {
		        var xmlhttp = new XMLHttpRequest();
		        xmlhttp.onreadystatechange = function() {
		            if (this.readyState == 4 && this.status == 200) {
		                document.getElementById("arts_info").innerHTML = this.responseText;
		            }
		        };
		        xmlhttp.open("GET", "wp-content/themes/areview-child/artist_info2.php?q=" + str, true);
		        xmlhttp.send();
					}
			}
			</script>
		<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    	<div class="modal-content">
	      	<div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span color="white" aria-hidden="true">X</span></button>
	        <h4 class="modal-title" id="myModalLabel">Event Information</h4>
	      	</div>
	     	<div class="modal-body">
	        <div id="arts_info"></div>
	      	</div>
	    	</div>
	   		</div>
		</div>

<!--//Artists Information //////////////////////-->
<div class="row clearfix">
	<h1>CONCERTS &amp; EVENTS AT SCOIL GHEIMHRIDH 2017</h1>
	<div class="event">Dé Céadaoin, 27 Nollaig</div>
</div>
<div class="row">
<?php

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%27 Nollaig' ORDER BY artist_id ASC;", ARRAY_A);
foreach($results as $row) {
        	$artist_id = $row['artist_id'];
		  	$artist_name  = $row['artist_name'];
			$artist_info = $row['artist_info'];
		  	$date  = $row['date'];
			$time = $row['time'];
		  	$venue  = $row['venue'];
			$book_url  = $row['book_url'];
			$pic  = $row['pic'];
			$picLarge  = $row['picLarge'];

	print ("<div class=\"event_float col-xs-12 col-sm-6 col-md-3 col-lg-3\">");
	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
	print ("<div class=img-wrap style=\"background-image: url(" .$pic.");\"></div>
			<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>
			<div class=\"cta-wrap\">".$book_url);
	print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=info btn-info data-toggle=modal data-target=#myModal>Details</button></div>");
	print ("</form></div>");
}
?>
</div><!--row-->

<div class="row clearfix">
	<div class="event">Déardaoin, 28 Nollaig</div>
</div>
<div class="row">
<?php

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%28 Nollaig' ORDER BY artist_id ASC;", ARRAY_A);
foreach($results as $row) {
        	$artist_id = $row['artist_id'];
		  	$artist_name  = $row['artist_name'];
			$artist_info = $row['artist_info'];
		  	$date  = $row['date'];
			$time = $row['time'];
		  	$venue  = $row['venue'];
			$book_url  = $row['book_url'];
			$pic  = $row['pic'];
			$picLarge  = $row['picLarge'];

	print ("<div class=\"event_float col-xs-12 col-sm-6 col-md-3 col-lg-3\">");
	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
	print ("<div class=img-wrap style=\"background-image: url(" .$pic.");\"></div>
			<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>
			<div class=\"cta-wrap\">".$book_url);
	print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=info btn-info data-toggle=modal data-target=#myModal>Details</button></div>");
	print ("</form></div>");
}
?>
</div><!--row-->

<div class="row clearfix">
	<div class="event">Dé hAoine, 29 Nollaig</div>
</div>
<div class="row">
<?php

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%29 Nollaig' ORDER BY artist_id ASC;", ARRAY_A);
foreach($results as $row) {
        	$artist_id = $row['artist_id'];
		  	$artist_name  = $row['artist_name'];
			$artist_info = $row['artist_info'];
		  	$date  = $row['date'];
			$time = $row['time'];
		  	$venue  = $row['venue'];
			$book_url  = $row['book_url'];
			$pic  = $row['pic'];
			$picLarge  = $row['picLarge'];

	print ("<div class=\"event_float col-xs-12 col-sm-6 col-md-3 col-lg-3\">");
	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
	print ("<div class=img-wrap style=\"background-image: url(" .$pic.");\"></div>
			<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>
			<div class=\"cta-wrap\">".$book_url);
	print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=info btn-info data-toggle=modal data-target=#myModal>Details</button></div>");
	print ("</form></div>");
}
?>
</div><!--row-->

<div class="row clearfix">
	<div class="event">Dé Sathairn, 30 Nollaig</div>
</div>
<div class="row">

<?php

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%30 Nollaig' ORDER BY artist_id ASC;", ARRAY_A);
foreach($results as $row) {
        	$artist_id = $row['artist_id'];
		  	$artist_name  = $row['artist_name'];
			$artist_info = $row['artist_info'];
		  	$date  = $row['date'];
			$time = $row['time'];
		  	$venue  = $row['venue'];
			$book_url  = $row['book_url'];
			$pic  = $row['pic'];
			$picLarge  = $row['picLarge'];

	print ("<div class=\"event_float col-xs-12 col-sm-6 col-md-3 col-lg-3\">");
	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
	print ("<div class=img-wrap style=\"background-image: url(" .$pic.");\"></div>
			<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>
			<div class=\"cta-wrap\">".$book_url);
	print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=info btn-info data-toggle=modal data-target=#myModal>Details</button></div>");
	print ("</form></div>");
}
?>
</div><!--row-->

<div class="row clearfix">
	<div class="event">Dé Domhnaigh, 31 Nollaig</div>
</div>
<div class="row">

<?php

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%31 Nollaig' ORDER BY artist_id ASC;", ARRAY_A);
foreach($results as $row) {
        	$artist_id = $row['artist_id'];
		  	$artist_name  = $row['artist_name'];
			$artist_info = $row['artist_info'];
		  	$date  = $row['date'];
			$time = $row['time'];
		  	$venue  = $row['venue'];
			$book_url  = $row['book_url'];
			$pic  = $row['pic'];
			$picLarge  = $row['picLarge'];

	print ("<div class=\"event_float col-xs-12 col-sm-6 col-md-3 col-lg-3\">");
	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
	print ("<div class=img-wrap style=\"background-image: url(" .$pic.");\"></div>
			<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>
			<div class=\"cta-wrap\">".$book_url);
	print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=info btn-info data-toggle=modal data-target=#myModal>Details</button></div>");
	print ("</form></div>");
}
?>
</div><!--row-->

<div class="row clearfix">
	<div class="event">Dé Luain, 1 Eanáir</div>
</div>
<div class="row">

	<?php

	global $wpdb;
	$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%1 Eanáir' ORDER BY artist_id ASC;", ARRAY_A);
	foreach($results as $row) {
	        	$artist_id = $row['artist_id'];
			  	$artist_name  = $row['artist_name'];
				$artist_info = $row['artist_info'];
			  	$date  = $row['date'];
				$time = $row['time'];
			  	$venue  = $row['venue'];
				$book_url  = $row['book_url'];
				$pic  = $row['pic'];
				$picLarge  = $row['picLarge'];

		print ("<div class=\"event_float col-xs-12 col-sm-6 col-md-3 col-lg-3\">");
		print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
		print ("<div class=img-wrap style=\"background-image: url(" .$pic.");\"></div>
				<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>
				<div class=\"cta-wrap\">".$book_url);
		print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=info btn-info data-toggle=modal data-target=#myModal>Details</button></div>");
		print ("</form></div>");
	}
	?>
	</div><!--row-->




	</main><!-- #main -->
</div><!-- #primary -->


  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
