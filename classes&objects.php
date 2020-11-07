<?php 
    //class
    class User {
        
        //create property
        private $email;
        private $name;

        //construct
        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
        }

        //function
        public function login(){
            //echo 'the user logged in';
            echo $this->name . ' logged in';
        }

        //getters
        public function getName(){
            return $this->name;
        }

        //setters for updating element
        public function setName($name){
            if(is_string($name) && strlen($name) > 1){
                $this->name = $name;
                return "name has been updated to $name";
            } else {
                return 'not a valid name';
            }
        }
    }

    $userTwo = new User('yoshi', ' yoshi@thenetninja.co.uk');

    // echo $userTwo->getName();
    // echo $userTwo->setName(50);
    echo $userTwo->setName('shaun');
    echo $userTwo->getName();
?>