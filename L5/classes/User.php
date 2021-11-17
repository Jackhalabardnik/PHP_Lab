<?php

class User {
    const STATUS_USER = 1;
    const STATUS_ADMIN = 2;
    protected $username;
    protected $passwd;
    protected $fullname;
    protected $email;
    protected $date;
    protected $status;

    function __construct($username, $fullname, $email, $passwd) {
        $this->status = User::STATUS_USER;
        $this->username = $username;
        $this->fullname = $fullname;
        $this->email = $email;
        $this->passwd = password_hash($passwd,  PASSWORD_DEFAULT);
        $this->date = new DateTime();
    }

    public function show() {
        echo "#nick: ".$this->username." #nazwa: ".$this->fullname." #hasz hasła: ".$this->passwd." #email: ".$this->email." #status: ".$this->status." #data utworzenia: ".($this->date->format('Y-m-d'))."<br>";
    }

}