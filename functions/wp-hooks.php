<?php

/**
 * villa site LOGO
 * @site logo and site title
 * @ logo page css
 */
function villa_login_logo() {
	$logo = get_field('logo', 'option'); ?>

    <style type="text/css">
		.login.login-action-login.wp-core-ui {
            background: #002b6b;
			height: 100vh;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position-x: center;
            background-position-y: center;
            background-repeat: no-repeat;
		}

        .login form {
            background-color: #f9fcff !important;
        }

        .login form {
            background-color: #f9fcff !important;
            border-width: 0px !important;
            box-shadow: none !important;
            margin-top: 17px !important;
            padding-top: 26px !important;
            padding-right: 50px !important;
            padding-bottom: 2px !important;
            padding-left: 50px !important;
            margin-top: 20px !important;
            margin-left: 0 !important;
            padding: 26px 24px 34px !important;
            font-weight: 400 !important;
            overflow: hidden !important;
            border: none !important;
            box-shadow: 0 1px 3px rgba(0,0,0,.04) !important;
        }

        .login form .input {
            padding: 10px 15px 8px !important;
            line-height: normal !important;
        }

        p#backtoblog {
            display: none !important;
        }

        #login {
            padding: 28px 0 !important;
            margin: 10% auto !important;
            width: 450px !important;
            box-shadow: 0 2px 4px 0 rgba(0,0,0,0.5) !important;
            background-color: #ffffff !important;
        }

        #login h1 a,
        .login h1 a {
            background: url(<?php echo $logo['url']; ?>);
            height: auto;
            width: 100%;
            background-repeat: no-repeat;
            padding-bottom: 40px;
            text-align: center;
            margin: 0px auto 20px;
            background-position: bottom;
            background-size: contain;
            line-height: normal;
        }
		.wp-core-ui .button-primary {
            background: transparent linear-gradient(90deg, #002b6b 0%, #3A607C 100%) 0% 0% no-repeat padding-box !important;
            padding: 6px 24px !important;
            border: none !important;
			transition: .3s;
		}
		.wp-core-ui .button-primary:hover {
            background: transparent linear-gradient(90deg, #002b6b 0%, #002b6b 100%) 0% 0% no-repeat padding-box !important;
		}
		.login #backtoblog a:hover,
		.login #nav a:hover,
		.login h1 a:hover {
			color: #3A607C !important;
		}
        .login #login_error, .login .message, .login .success {
            border-left: 4px solid #BF1F24 !important;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'villa_login_logo' );

# Site Home URL
function villa_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'villa_login_logo_url' );

# Site title
function villa_login_logo_url_title() {
    return 'Your SUPER-powered WP Engine Site';
}
add_filter( 'login_headertext', 'villa_login_logo_url_title' );

add_filter('villa_bam_include_cf7_scripts', '__return_true', 9999);
