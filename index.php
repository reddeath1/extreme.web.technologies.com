<?php
include_once 'header.php';

class extremeWeb extends appController{
    public function __construct()
    {
       parent::__construct();
       $this->app();
    }

    private function app(){
        $this->setTitle('Extreme Web Technology');
        $this->setData('url',$this->Url());
        $this->setData('date',date('Y'));
        $this->AppProcessor();
    }

}

new extremeWeb();

