<?php

class C {

    public static function C_add(User $user) {
        self::save($user);
    }

    private static function save(User $user) {
        echo 'User Saved';
    }
    
    
}