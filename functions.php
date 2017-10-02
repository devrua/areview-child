<?php
function themeprefix_bootstrap_modals() {
	wp_register_script ( 'modaljs' , get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1', true );
	wp_register_style ( 'modalcss' , get_stylesheet_directory_uri() . '/css/bootstrap.css', '' , '', 'all' );

	wp_enqueue_script( 'modaljs' );
	wp_enqueue_style( 'modalcss' );
}

add_action( 'wp_enqueue_scripts', 'themeprefix_bootstrap_modals');

// add_action( 'admin_enqueue_scripts', 'queue_my_admin_scripts');
//
// function queue_my_admin_scripts() {
// wp_enqueue_script (  'my-spiffy-miodal' ,       // handle
// 									scoil/wp_content/themes/areview-child/custom.js,       // source
// 									array('jquery-ui-dialog')); // dependencies
// // A style available in WP
// wp_enqueue_style (  'wp-jquery-ui-dialog');
// }

////////////////////////////////////////////////////////
wp_enqueue_script('jquery');

function addArtist(){
	if(isset($_POST['artist_info']))
	$fly = $_POST['artist_info'];

	$artist_id = stripslashes_deep($_GET['artist_id']);
	$artist_name = stripslashes_deep($_GET['artist_name']);
	$info = stripslashes_deep($_GET['artist_info']);
	$venue = stripslashes_deep($_GET['venue']);
	$date = stripslashes_deep($_GET['date']);
	$time = stripslashes_deep($_GET['time']);
	$pic = stripslashes_deep($_GET['pic']);
	$video = stripslashes_deep($_GET['video']);

	global $wpdb;
	$myData = $wpdb->get_results($wpdb->prepare("SELECT * FROM wp_artists WHERE artist_id = '$fly'", ARRAY_A));

}
add_action('wp_ajax_addArtist', 'addArtist');
add_action('wp_ajax_nopriv_addArtist', 'addArtist');

// function addArtist(){
// if(isset($_POST['value5']))
// $fly = $_POST['value5'];
//
// $query1="SELECT * wp_artists WHERE artist_id = '$fly'";
//
// $result1 = mysqli_query($connection, $query1) or die("Error in SQL statement:" .mysqli_error());
//
//   if($result1)
//      echo 'Welcome, updates have now been entered into our database.';
//   else
//      echo 'Your entry did not work, please try again.';
// }
//
//
// add_action('wp_ajax_addArtist', 'addArtist');
// add_action('wp_ajax_nopriv_addArtist', 'addArtist');



// function showUser(str) {
//     if (str == "") {
//         document.getElementById("txtHint").innerHTML = "";
//         return;
//     } else {
//         if (window.XMLHttpRequest) {
//             // code for IE7+, Firefox, Chrome, Opera, Safari
//             xmlhttp = new XMLHttpRequest();
//         } else {
//             // code for IE6, IE5
//             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//         }
//         xmlhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById("txtHint").innerHTML = this.responseText;
//             }
//         };
//         xmlhttp.open("POST","artist_info2.php="+str,true);
//         xmlhttp.send();
//     }
// }
///////////////////////////////////////////////////////////

    function safely_add_stylesheet() {
        wp_enqueue_style( 'prefix-style', get_stylesheet_directory_uri() . '/css/animate.css' );
    }
        add_action( 'wp_enqueue_scripts', 'safely_add_stylesheet' );


      //Child add remote scripts
        //Script 1
     add_action( 'wp_enqueue_scripts', 'child_add_maps' );

        function child_add_maps() {
	wp_register_script(
		'myMaps-script',
		get_stylesheet_directory_uri() . '/scripts/myMaps.js');
        wp_enqueue_script('myMaps-script');
}

        //Script 2
     add_action( 'wp_enqueue_scripts', 'child_add_modal' );

        function child_add_modal() {
	wp_register_script(
		'myModal-script',
		get_stylesheet_directory_uri() . '/scripts/modal.js');
        wp_enqueue_script('myModal-script');
}

        //Script 3
        add_action( 'wp_enqueue_scripts', 'child_add_scripts' );

        function child_add_scripts() {
	wp_register_script(
		'myQuery-script',
		get_stylesheet_directory_uri() . '/scripts/jquery.js');
        wp_enqueue_script('myQuery-script');
}

        //Script 4
     add_action( 'wp_enqueue_scripts', 'child_add_bootstrap' );

        function child_add_bootstrap() {
	wp_register_script(
		'myBootstrap-script',
		get_stylesheet_directory_uri() . '/scripts/bootstrap.min.js');
        wp_enqueue_script('myBootstrap-script');
        }

?>
