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
$myData = $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_artistsirish WHERE artist_id= '$q'", ARRAY_A));// frames

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
  #scoilInfo {
    background-image: url(".$picLarge.");
    background-repeat: no-repeat;
    background-position: bottom left;
  }
</style>");

     print ("<div id=scoilInfo>");
       print ("<h3>".$artist_name."</h3></br></br><h4>".$date."</br>".$time." - ".$venue."</h4>
       <div class=holder><div class=boxer><p>".$info."</p></div><br><div class=tryer2>".$video."</div><div class=tryer3>".$book_url."</div></div>");
}
?>
