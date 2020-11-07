<?php 
    //class
    class User {
        
        //create property
        public $email;
        public $name;

        //construct
        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
        }

        //function
        public function login(){
            //echo 'the user logged in';
            echo $this->name . 'logged in';
        }
    }

    $userTwo = new User('yoshi', ' yoshi@thenetninja.co.uk');
?>