<?php

class Main_host
{
    public $config = [
        'host' => 'localhost',
        'user' => 'david',
        'password' => 'DEV1994!',
        'db' => 'net_efficiency',
    ];

    public function __construct()
    {
        $this->link = mysqli_connect(
            $this->config['host'], $this->config['user'], $this->config['password'], $this->config['db']
        ) or die(' Couldn\'t connect to '.$this->config['db'].': '.mysqli_error($this->link));
    }
}
