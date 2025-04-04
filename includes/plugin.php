<?php


add_action("wp_login",function($user_login,$user){
    update_user_meta( $user->ID, "last_user_login_date", wp_date( get_option('date_format') ));
    update_user_meta( $user->ID, "last_user_login_time",wp_date( get_option('time_format') ));
},10,2);

add_action( "personal_options", function($profile_user ){
    $last_user_login_date=get_user_meta( $profile_user->ID, "last_user_login_date" );
    $last_user_login_time=get_user_meta( $profile_user->ID, "last_user_login_time" );
    echo "
        <table class='form-table last-user-login-wrapper'>
            <tbody>
                <tr>
                    <th>
                        زمان ثبت نام کاربر
                    </th>
                    <td>
                        ".$profile_user->user_registered."
                    </td>
                </tr>
                <tr>
                    <th>
                        آخرین ورود کاربر
                    </th>
                    <td>
                        تاریخ : ".(!empty($last_user_login_date[0]) ? $last_user_login_date[0] : "ثبت نشده")."  | 
                        ساعت : ".(!empty($last_user_login_time[0] )? $last_user_login_time[0] : "ثبت نشده" )."
                    </td>
                </tr>
            </tbody>
        </table>
    ";
});

add_action( "admin_enqueue_scripts", function(){
    wp_enqueue_style( "last-user-login-style", LAST_USER_LOGIN_PLUGIN_DIR_URL."includes/assets/app.css", [], LAST_USER_LOGIN_PLUGIN_VERSION, false );
});