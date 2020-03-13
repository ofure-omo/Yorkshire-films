<?php

class Librarian extends Users{

    public function Welcome() {
        echo "Welcome " . $this->userfirstname. "." . " You are a Librarian and you can access librarian.html" .PHP_EOL;
    }  

}
