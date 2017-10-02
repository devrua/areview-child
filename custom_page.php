<?php
/*
 * Template Name: Custom What Page
 * Description: Custom What Page
 */
?>
<?php include 'header_home.php'; ?>


<script>
$( function() {
    $( "#welcome-content" ).dialog({
      autoOpen: false,
			width: 840,
      height: 800,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 500
      }
    });

    $( ".flip" ).on( "click", function() {
      $( "#welcome-content" ).dialog('open');
    });
  } );
</script>

<style>
#welcome-content {
}

#bground{
  margin: 0 auto;
}

.holder{
  margin: 0 0 0 20px;
  width: 790px;
}

.large_pic{
  float: left;
  margin: 2px 20px 15px 6px;
}

.large_pic:hover {
    opacity: 0.5;
}

.small_pic{
  float: left;
  margin: 2px 5px 15px 6px;
}

.small_pic:hover {
    opacity: 0.5;
}

.headSc {
  float: left;
  position: absolute;
  margin: 10px 0 0 30px;
  padding: 5px 0 5px 0;
}

#fp_menu {
  position: absolute;
  top: 0px;
  right: 0px;
  margin: -3px 0 0 30px;
  padding: 5px 0 5px 0;
  width: 50%;
  height: 40px;
  text-align: center;
  background-color: #830f15;
  border: solid 1px #fff;
}

#fp_menu a {
  margin: 3px 15px 3px 8px;
  padding: 3px 5px 3px 5px;
  text-align: center;
  color: #fff;
}

#fp_menu a: hover {
  margin: 3px 15px 3px 8px;
  padding: 3px 5px 3px 5px;
  text-align: center;
  color: #ffcd08;
}

.flip {
  width: 60px;
  height: 60px;
  margin: 620px auto;
    padding: 5px 0 5px 0;
    text-align: center;
    background-color: #000;
    border: solid 1px #fff;
}

.flip h4{
  font: 14px;
  font: inherit;
  margin: -5px 0 4px 0;
    text-align: center;
    color: #fff;
}

.flip :hover{
  margin-bottom: 6px;
  cursor: pointer;
}

/*.ui-dialog-titlebar {
    display: none;
}*/

</style>

  <div class="headSc"><img src="http://scoil.economysites.org/wp-content/uploads/base_logo.png" alt="scoil_gheimhridh" width="182" height="246"></div>

    <div id="fp_menu"><a href="http://scoil.economysites.org/?page_id=2">Home</a><a href=" http://scoil.economysites.org/?page_id=1697 ">Events</a><a href="http://scoil.economysites.org/?page_id=10">Workshops</a><a href="http://scoil.economysites.org/?page_id=16">Practical Info</a><a href="http://scoil.economysites.org/?page_id=18">Contact Us</a></div>

				<div class="flip"><h4>see</h4>
        <img class="aligncenter size-full wp-image-1702" src="http://scoil.economysites.org/wp-content/uploads/2016/10/arrow.png" alt="arrow" width="18" height="24" /></div>

        <div id="welcome-content"  title="Scoil Gheimhridh Ghaoth Dobhair 2016">
          <div class="holder">
          <div class="large_pic"><a href="http://scoil.economysites.org/concert-programme/"><img src="http://scoilgheimhridh.com/wp-content/uploads/2016/11/polca4_fp.jpg" width="360" height="245" /></div><div class="large_pic"><a href="http://scoil.economysites.org/concert-programme/"><img src="http://scoilgheimhridh.com/wp-content/uploads/2016/11/vagabonds_fp.jpg" width="360" height="245" /></div><br>
<div class="small_pic"><a href="http://scoil.economysites.org/workshops/"><img src="http://scoilgheimhridh.com/wp-content/uploads/2016/11/friel_fp.jpg" width="264" height="175" /></div><div class="small_pic"><a href="http://scoil.economysites.org/workshops/"><img src="http://scoilgheimhridh.com/wp-content/uploads/2016/11/laoise_fp.jpg" width="217" height="175" /></div><div class="small_pic"><a href="http://scoil.economysites.org/workshops/"><img src="http://scoilgheimhridh.com/wp-content/uploads/2016/11/martin_mcginley_fp.jpg" width="242" height="175" /></div><br>
<div class="large_pic"><a href="http://scoil.economysites.org/concert-programme/"><img src="http://scoilgheimhridh.com/wp-content/uploads/2016/11/gatehouse_fp.jpg" width="360" height="245" /></div><div class="large_pic"><a href="http://scoil.economysites.org/concert-programme/"><img src="http://scoilgheimhridh.com/wp-content/uploads/2016/11/lynched_fp.jpg" width="360" height="245" /></div></div>
							</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php include 'footer_home.php'; ?>
