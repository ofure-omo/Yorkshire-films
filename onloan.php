<?php

class onloan {
    
    protected $filmtitle;
    protected $duedate;
    protected $loandate;
    protected $username;
    
    function getFilmtitle() {
        return $this->filmtitle;
    }

    function getDuedate() {
        return $this->duedate;
    }

    function getLoandate() {
        return $this->loandate;
    }

    function getUsername() {
        return $this->username;
    }

    function setFilmtitle($filmtitle) {
        $this->filmtitle = $filmtitle;
    }

    function setDuedate($duedate) {
        $this->duedate = $duedate;
    }

    function setLoandate($loandate) {
        $this->loandate = $loandate;
    }

    function setUsername($username) {
        $this->username = $username;
    }

      public function __construct($filmtitle, $duedate, $loandate, $username) {
      $this->filmtitle = $filmtitle;
      $this->duedate = $duedate;
      $this->loandate = $loandate;
      $this->username = $username;      
    }
         
}