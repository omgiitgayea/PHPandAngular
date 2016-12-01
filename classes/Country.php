<?php

/**
 * Created by PhpStorm.
 * User: Godai Yuusaku
 * Date: 11/30/2016
 * Time: 8:43 PM
 */
class Country
{
    public $name;
    public $code;
    public $states;

    public function __construct($name = "", $code = "", $states = array())
    {
        $this->name = $name;
        $this->code = $code;
        $this->states = $states;
    }
}