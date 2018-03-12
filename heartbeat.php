<?php

function slower_heartbeat( $settings ) {
    $settings['interval'] = 120;
    return $settings;
}
add_filter( 'heartbeat_settings', 'slower_heartbeat' );
