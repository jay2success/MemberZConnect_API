<?php

require 'MemberZConnect_API.php';

$license_key = ''; // Provide the license key during client install. Do not store it anywhere on the client's installation.
$api_url = 'http://your-domain.com/?smb_action=api';
$auth = ''; // The auth stored by your software (as you recieved from client_install). Leave blank if you did not do client_install yet.
//$auth = get_option('my_auth_key');
$domain = ''; // The domain

$memberzonnect_api = new MemberZConnect_API ( $api_url, $auth, $domain );

/**
 * Client Install API Call
 */
/*
$client_install = $memberzonnect_api->client_install ( $license_key );

if ( $client_install ) {
    $client_install_data = $client_install[ 'data' ];
    $auth = $client_install[ 'auth' ];
    // Insert auth into options to use for other API calls.
} else {
    echo $memberzonnect_api->error;
}
 */

/**
 * Get Download URL
 */
/*
$download_url = $memberzonnect_api->get_download_url ();
 */

/**
 * Get Install Data API Call
 */
/*
$install_data = $memberzonnect_api->get_install_data ();
*/

/**
 * Get Version API Call
 */
/*
$version = $memberzonnect_api->get_version (); // Example: 1.5.2
*/
/**
 * Get Update Info API Call
 */
/*
$update_info = $memberzonnect_api->get_update_info ();
if ( $update_info ) {
    $new_version = $update_info[ 'new_version' ];
    $package = $update_info[ 'package' ]; // The download URL
} else {
    echo $memberzonnect_api->error;
}
*/
/**
 * Validate License API Call
 */
/*
$license_valid = $memberzonnect_api->validate_license ( $license_key );
if ( $license_valid ) {
    echo "License is valid!";
}
*/
/**
 * Validate Auth API Call
 */
/*
$auth_valid = $memberzonnect_api->validate_auth ( $auth );
if ( $auth_valid ) {
    echo "Auth is valid!";
}
*/
/**
 * Remove License API Call
 */
/*
$remove_license = $memberzonnect_api->remove_license ();
if ( $remove_license ) {
    echo "License has been removed.";
    // At this point remove auth from options
}
*/
