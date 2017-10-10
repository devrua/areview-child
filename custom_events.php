<?php
/*
 * Template Name: Custom Events Page
 * Description: Custom Events Page
 */
?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<style type="text/css">
		.modal-dialog {
			width: 920px;
			height:700px;
		}
		#scoilInfo .holder {
			width: 350px;
			height: 400px;
			margin: 0 0 0 540px;
		}

		#scoilInfo .boxer {
			color: #000;
			width: 350px;
			height:254px;
			margin: 10px;
			padding: 5px 0 5px 0;
			border: solid 1px #333;
			overflow: scroll;
			background: url("http://www.scoilgheimhridh.com/wp-content/uploads/2016/11/trans.png");
		}

		#scoilInfo .boxer p {
			color: #000;
			width: 300px;
			font-weight: 400;
			padding: 8px 4px 0 4px;
		}

		.tryer{
			width: 200px;
			border: solid 2px #fff;
		}

		.tryer2{
			margin: -10px 30px 0 12px;
			width: 230px;
		}

		.tryer3{
			float: right;
			margin:98px 0 0 0;
		}

		#myModal{
			height: 600px;
			top: calc(30% - 50px) !important;
		}

		.close{
			color: #edc951;
			float: right;
			font-weight: 700;
		}

		.modal-header{
			background: #830f15;
			border-radius: 6px;

		}
		
		.modal-title{
			color: #fff;


		}


		.modal-body{
			background: #fff;
			border-radius: 6px;
		}

		#scoilInfo iframe{
			float: left;
			width: 200px;
			height: 120px;

		}

		#scoilInfo h2{
			float: left;
			font-size: 24px;
			font-weight: 700;
			color: #000;
			margin: 0 0 0 -40px;
			padding: 0 5px 0 5px;
		}


		#scoilInfo h3{
			float:left;
			font-size: 28px;
			font-weight: 700;
			color: #000;
			margin: 0 0 10px 0;
		}

		/*.scoilInfo h3:after {
    content : "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    background: #fff;
    width: 100%;
    height: 100%;
    opacity : 0.2;
    z-index: -1;
}*/

		#scoilInfo h4{

			font-size: 14px;
			font-weight: bold;
			color: #333;
			margin: 0;
		}

		.artist-info{
			width: 100px;
			height: 60px;
			padding: 5px 0 5px 0;
			text-align: center;
			background-color: #ff0000;
			border: solid 1px #fff;
		}


		.infoEvent {
			width: 100px;
			height: 30px;
			padding: 5px 0 5px 0;
			text-align: center;
			background-color: #ff0000;
			border: solid 1px #fff;
		}

		.infoEvent h4{
			font: 14px;
			font: inherit;
			margin: -5px 0 4px 0;
			text-align: center;
			color: #fff;
		}

		.infoEvent :hover{
			margin-bottom: 6px;
			cursor: pointer;
		}

		.ui-dialog {
			z-index: 1000 !important;
		}

		.ui-dialog .ui-dialog-content {
			border: 0;
			padding: .5em 1em;
			background: #00ff00;
			overflow: auto;
			zoom: 1;
		}

		#primary {
			width: 100%;
		}

		#secondary {
			display: none;
		}

		.event_float{
			float:left;
			color: #000;
			font-size: 12px;
			line-height: 16px;
			width: 230px;
			height: 335px;
			margin: 20px 16px 10px 16px;
			padding: 10px 10px 5px 10px;
			border: 1px solid #752222;
			-webkit-box-shadow: 0px 3px 3px #333;
			-moz-box-shadow: 0px 3px 3px #333;
			box-shadow: 0px 3px 3px #333;
		}

		.event_float form > img {
			min-height: 116px;
		}

		.event_float a{
			color: #330000;
			line-height: 16px;
			font-weight: 700;
			font-size: 14px;
		}

		.event_float h2{
			color: #000;
			font-weight: 700;
			margin: 10px 0 20px 0;
			font-size: 18px;
			min-height: 100px;
		}

		.event_float h3{
			color: #752222;
			font-weight: bold;
			font-size: 14px;
		}

		.event_float h4{
			mar5in: 0 10px 30px 0;
			color: #555;
			font-weight: bold;
			font-size: 16px;
			min-height: 34px;
		}

		.event_float .btn	{
			position: relative;
			float: right;
			top: 0;
			background-color: #d3bd67;
			font-size: 14px;
			width: 75px;
			height: 20px;
			border: 1px solid #000;
			-webkit-box-shadow: 0px 3px 3px #999;
			-moz-box-shadow: 0px 3px 3px #999;
			box-shadow: 0px 3px 3px #999;
		}

		.event_float .btn	h4{
			margin: -2px 0 0 0;
			font-size: 12px;
			font-weight: 400;
		}

		</style>

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

	print ("<div class=event_float col-xs-12 col-sm-6 col-md-3 col-lg-3>");
	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
	print ("<div class=img-wrap style=\"background-image: url(" .$pic.");\"></div>
			<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>
			<div class=\"cta-wrap\">".$book_url);
	print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=btn btn-info data-toggle=modal data-target=#myModal><h4>Artist info</h4></button></div>");
	print ("</form></div>");
}
?>
</div><!--row-->
<div class="event">Déardaoin, 28 Nollaig</div>
<?php

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%28 Nollaig' ORDER BY artist_id ASC", ARRAY_A);
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

	print ("<div class=event_float>");

	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
		print ("<img class=aligncenter size-full wp-image-1652 src=".$pic." />
	<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>".$book_url." ");

print ("<form id=form method=post>");
print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=btn btn-info data-toggle=modal data-target=#myModal><h4>Artist info</h4></button</div>");
print ("</form></div>");
}
?>
<div class="event">Dé hAoine, 29 Nollaig</div>
<?php

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%29 Nollaig' ORDER BY artist_id ASC", ARRAY_A);
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

	print ("<div class=event_float>");

	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
		print ("<img class=aligncenter size-full wp-image-1652 src=".$pic." />
	<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>".$book_url." ");

print ("<form id=form method=post>");
print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=btn btn-info data-toggle=modal data-target=#myModal><h4>Artist info</h4></button</div>");
print ("</form></div>");
}
?>
<div class="event">Dé Sathairn, 30 Nollaig</div>
<?php

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%30 Nollaig' ORDER BY artist_id ASC", ARRAY_A);
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

	print ("<div class=event_float>");

	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
		print ("<img class=aligncenter size-full wp-image-1652 src=".$pic." />
	<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>".$book_url." ");

print ("<form id=form method=post>");
print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=btn btn-info data-toggle=modal data-target=#myModal><h4>Artist info</h4></button</div>");
print ("</form></div>");
}
?>
<div class="event">Dé Domhnaigh, 31 Nollaig</div>
<?php

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%31 Nollaig' ORDER BY artist_id ASC", ARRAY_A);
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

	print ("<div class=event_float>");

	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
		print ("<img class=aligncenter size-full wp-image-1652 src=".$pic." />
	<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>".$book_url." ");

print ("<form id=form method=post>");
print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=btn btn-info data-toggle=modal data-target=#myModal><h4>Artist info</h4></button</div>");
print ("</form></div>");
}
?>
<div class="event">Dé Luain, 1 Eanáir</div>
<?php

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_artists WHERE date LIKE '%1 Eanáir' ORDER BY artist_id ASC", ARRAY_A);
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

	print ("<div class=event_float>");

	print ("<form action=wp-content/themes/areview-child/artist_info.php method=post>");
		print ("<img class=aligncenter size-full wp-image-1652 src=".$pic." />
	<h4> ".$time." - ".$venue."</h4><h2>".$artist_name."</h2>".$book_url." ");

print ("<form id=form method=post>");
print ("<button type=button value=".$artist_id." id=infoEvent onclick=showArtist(this.value) class=btn btn-info data-toggle=modal data-target=#myModal><h4>Artist info</h4></button</div>");
print ("</form></div>");
}
?>

		</main><!-- #main -->
	</div><!-- #primary -->


  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
