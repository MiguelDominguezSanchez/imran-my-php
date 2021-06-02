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

// trait Say_World {
//     public function say_hello() {
//         echo 'Hello Trait';
//     }
// }

// class Teacher {
//     public function say_name() {
//         echo 'Teacher';
//     }
// }

// class Base extends Teacher {
//     use Say_World;

//     public function __construct() {
//         //
//     }
// }

// $base = new Base();
// $base->say_hello();
// $base->say_name();

?>

<!-- //*************** #14 traits in php *****************/ -->

<?php

trait Singleton {

    public static function get_instance() {
        static $instance = [];

        $called_class = get_called_class();

        if ( ! isset( $instance[ $called_class ] ) ) {
            echo 'Hello';
            $instance[ $called_class ] = new $called_class();
        }

        return $instance[ $called_class ];
    }

}

class User {
    use Singleton;

    public function __construct() {
        // echo 'User',
    }
}

$user_one = User::get_instance();
$user_two = User::get_instance();


















