<?php

function header_nav() {

    global $li_header;

    $query = APP\DB::$db->query("SELECT `path`,`title` FROM `pages` WHERE `priority` = 'main'");
    
    foreach ($query as $nav) {
        $li_header .= '<li><a href="'. $nav['path'] .'">'. $nav['title'] .'</a></li>';
    }

    return $li_header;

}

function footer_nav() {

    global $li_footer;

    $query = APP\DB::$db->query("SELECT `path`,`title` FROM `pages` WHERE `priority` = 'main'");
    
    foreach ($query as $nav) {
        $li_footer .= '<li><a href="'. $nav['path'] .'">'. $nav['title'] .'</a></li>';
    }

    return $li_footer;
}

function check_path($path) {

    $array_path = [];

    $query = APP\DB::$db->query("SELECT `path` FROM `pages`");
    
    foreach($query as $value) {
        array_push($array_path, $value[0]);
    }

    if (in_array($path, $array_path)) {
        return true;
    } else {
        return false;
    } 
}

function get_reg() {
    if(!isset($_COOKIE['login'])) {
        return '<div class="admin"><a href="sign-up">sign up</a></div>';
    } else {
        return '<div class="sign_out">
                    <p>Hello '. $_COOKIE['firstname'] . '!</p>
                    <form method="POST"><button name="sign-out">Sign-out</button></form>
                </div>' ;
    }
}