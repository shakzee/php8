<?php
class User{
        private ?string $email;
        public function __construct(?string $email=null)
        {
            $this->email = $email;
        }
        public  function getEmail(){
            return $this->email;
        }
}
 $userwithEmail = new User('info@gmail.com');
 $userwithoutEmail = new User();

 echo $userwithEmail->getEmail()?? "No Email";
    echo '<br><br>    ';
 echo $userwithoutEmail->getEmail();




