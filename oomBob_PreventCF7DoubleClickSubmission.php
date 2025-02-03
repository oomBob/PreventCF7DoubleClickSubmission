<?php
//oom_Bob
// Prevent Double Click on WPCF7 forms
add_action( 'wp_footer', 'oom_prevent_doubleclick' );

function oom_prevent_doubleclick() {
?>
    <script>
	//Change Button Class Name Accordingly 
	jQuery( 'button.btn.btn-warning.waves-effect.waves-light' ).click(function() {
		jQuery( this ).css( 'display', 'none' );
		jQuery('.oom-loading-text').text('Processing...');
	});

	document.addEventListener( 'wpcf7submit', function() {
	    //Change Button Class Name Accordingly 
	    jQuery( 'button.btn.btn-warning.waves-effect.waves-light' ).css( 'display', 'inline' );
		jQuery('.oom-loading-text').text('');
	}, false );

	document.addEventListener( 'wpcf7invalid', function() {
	    //Change Button Class Name Accordingly 
		jQuery( 'button.btn.btn-warning.waves-effect.waves-light' ).css( 'display', 'inline' );
		jQuery('.oom-loading-text').text('');
	}, false );
	// END -- contactform7 prevent double submit //

    </script>

<?php
	
} 

//Place this DIV under CF7 Submit Button
//<div class"oom-loading-text"></div>

//Add CSS 
/*
.oom-loading-text {
    text-align: center!important;
    font-size: 18px!important;
    font-style: italic!important;
}
*/
