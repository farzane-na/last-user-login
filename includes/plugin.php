<?php


add_action("wp_login",function($user_login,$user){
    wp_die(var_dump($user->ID));
    update_user_meta( $User->ID, "last_user_login_date", wp_date( get_option('date_format') ));
    update_user_meta( $User->ID, "last_user_login_time",wp_date( get_option('date_time') ));
},10,2);

add_action( "personal_options", function($profile_user ){
    echo "hello";
    var_dump($profile_user );
});
update_user_meta($user->ID, "last_user_login", wp_date(get_option( 'date_format' ) . " " . get_option( 'time_format' )));