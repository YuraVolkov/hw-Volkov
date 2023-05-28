<?php

class Work
{
    public $nameCompany;
    public $specialization;

    /*public function __construct($name, $salary, $workschedule){
        $this->name = $name;
        $this->salary = $salary;
        $this->workschedule = $workschedule;
    }*/

    public function printdocument(){
        echo 'name = ' . $this->nameCompany . ' specialization = ' . $this->specialization;
    }
}