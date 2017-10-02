<?php
/*
 * Template Name: Custom Home Page
 * Description: Custom Home Page
 */
?>
<?php include 'header_home.php'; ?>
<div id=bground><?php masterslider(1); ?></div>

<script>
$(document).ready(function(){
    $(".flip").click(function(){
        $(".welcome-content").toggleClass('closed open');
      return true;
    });
    });
</script>

<style>
.welcome-content {
	position:relative;
	z-index: 10000;
	width: 70%;
	padding:0;
	background: #fff;
	margin: 20px auto;
	border: 2px solid #ff0000;
}

.flip {
  width: 60px;
  height: 60px;
  margin: 180px auto;
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

.open {
    display:block;
    visibility:visible;

}

.closed {
    display:none;
    visibility:hidden;
}

@keyframes slideInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }

  100% {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.slideInDown {
  -webkit-animation-name: slideInDown;
  animation-name: slideInDown;
}
</style>


				<div class="flip"><h4>see</h4>
        <img class="aligncenter size-full wp-image-1702" src="http://localhost/scoil/wp-content/uploads/2016/10/arrow.png" alt="arrow" width="18" height="24" /></div>
				<div class="welcome-content closed">
									It’s 2016, and user interface and experience are more important now than ever. If you’re building a digital identity, whether it be for a website or application, “look and feel” play an extremely important part.

									With Flash and third-party plugins, like QuickTime, making a rapid exit from the browser, and externally-hosted videos and audio tracks being hard to customise and implement the way you’d like, developers wanting to implement media may have been left scratching their heads a bit.

									Luckily for us, media is making a big push into the limelight as native HTML5. We now have a host of different media types at our disposal, including video.

									Today, I’m going to show you how to use native HTML5 video, and implement it in the background of your site. All without using a plugin. We’ll take a look at some of the native video controls too, to make sure that a user’s experience is fully enhanced.


							</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php include 'footer_home.php'; ?>
