<?php

namespace Frc\WP\Env\Heroku\AWS;

$aws_access_key_id = getenv('AWS_ACCESS_KEY_ID');
$aws_secret_access_key = getenv('AWS_SECRET_ACCESS_KEY');
if ($aws_access_key_id and $aws_secret_access_key) {
    define('AWS_ACCESS_KEY_ID', $aws_access_key_id);
    define('AWS_SECRET_ACCESS_KEY', $aws_secret_access_key);
}

/*
 * Allow some extra settings that can be defined in recent
 * versions of WP Offload S3 plugin. If they are not defined,
 * they are then configurable in plugin settings and values
 * stored in database.
 *
 * https://deliciousbrains.com/wp-offload-s3/doc/settings-constants/
 */
$aws_env_key_to_wpos3_setting_field = array(
    'AWS_BUCKET'        => 'bucket',
    'AWS_OBJECT_PREFIX' => 'object-prefix'
);

$custom_offload_s3_settings = array();

foreach ( $aws_env_key_to_wpos3_setting_field as $env_key => $s3_setting ) {
    if (getenv($env_key)) {
        $custom_offload_s3_settings[$s3_setting] = getenv($env_key);
    }
}

if (count($custom_offload_s3_settings) > 0) {
    define('WPOS3_SETTINGS', serialize($custom_offload_s3_settings));
}
