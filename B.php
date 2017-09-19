<?php

// Module.
class B {

    public static function B_add(User $user)
    {
        $user->email = $user->name . '@gmail.com';
    }

}