<?php

namespace Frc\WP\Env\Heroku\AWS;

$aws_access_key_id = getenv('AWS_ACCESS_KEY_ID');
$aws_secret_access_key = getenv('AWS_SECRET_ACCESS_KEY');
if ( $aws_access_key_id and $aws_secret_access_key ) {
    define('AWS_ACCESS_KEY_ID', $aws_access_key_id);
    define('AWS_SECRET_ACCESS_KEY', $aws_secret_access_key);
}
