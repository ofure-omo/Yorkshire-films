<?php


class Member extends Users{

    public function Welcome() {
        echo "Welcome " . $this->userfirstname. "." . " You are a Member and you can access member.html" .PHP_EOL;
    }  

}
