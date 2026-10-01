<?php

class CSRF {

    public static function get() {
        if (!Session::get('csrf_token')) {
            $token = bin2hex(CustomFunctions::randchars(32));
            Session::set('csrf_token', $token);
        }
        return Session::get('csrf_token');
    }

    public static function isVerified(string $post_token) {

        if (Session::get('csrf_token') != null && hash_equals(Session::get('csrf_token'), $post_token)) {
            return true;
        }
        return false; 

    }

}