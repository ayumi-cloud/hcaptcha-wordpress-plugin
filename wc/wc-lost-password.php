<?php

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'woocommerce_lostpassword_form', 'hcaptcha_lost_password_display', 10, 0 );

if ( ! has_action( 'lostpassword_post', 'hcaptcha_lost_password_verify' ) ) {
    add_action( 'lostpassword_post', 'hcaptcha_lost_password_verify' );
}