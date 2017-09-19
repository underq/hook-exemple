<?php


// Code core Drupal.
class A {

    public $functionList = [
        'B::B_add',
        'C::C_add'
    ];

    function user_add($name) {
        $user = new User();
        $user->name = $name;

        foreach($this->functionList as $function) {
            call_user_func($function, $user);
        }
        

        return $user;
    }

}

