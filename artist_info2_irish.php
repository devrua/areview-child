<?php require_once('../../../wp-config.php');  ?>
<?php
session_start();
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package aReview
 */

  ?>
<?php
/* Template Name: Artist Info */
?>

<?php

$q = intval($_GET['q']);

global $wpdb;
$myData = $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_artists_gae WHERE artist_id= '$q'", ARRAY_A));// frames

foreach($myData as $row){
$artist_name = $row->artist_name;
$info = $row->artist_info;
$venue = $row->venue;
$date = $row->date;
$time = $row->time;
$pic = $row->pic;
$picLarge = $row->picLarge;
$video = $row->video;
$book_url = $row->book_url;

print ("<style>
  .mob-img {
    background-image: url(".$picLarge.");
    }
</style>");

print ("<div id=scoilInfo><div class=row><div class=\"col-xs-12 col-sm-12 col-md-12\">");
print ("<h3>".$artist_name."</h3><h4>".$date."</br>".$time." - ".$venue."</h4></div></div><div class=row><div class=\"col-xs-12 col-sm-12 col-md-7\"><div class=mob-img-wrap><div class=mob-img></div></div></div>
       <div class=\"col-xs-12 col-sm-12 col-md-5\"><div class=boxer><p>".$info."</p></div><div class=tryer2>".$video."</div><hr><div class=tryer3>".$book_url."</div></div></div></div>");
}
?>
