<?php

// include_once 'includes/Person.php';
// include_once 'includes/Student.php';

// spl_autoload_register( function ( $class ) {
//     echo $class;
//     include 'includes/' . $class . '.php';
// } );

// new Student();
// new Person();

//*************** traits *****************/

trait Say_World {
    public function say_hello() {
        echo 'Hello Trait';
    }
}

class Teacher {
    public function say_name() {
        echo 'Teacher';
    }
}

class Base extends Teacher {
    use Say_World;

    public function __construct() {
        //
    }
}

$base = new Base();
$base->say_hello();
$base->say_name();