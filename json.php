<?php
/**
 * Created by PhpStorm.
 * User: Godai Yuusaku
 * Date: 11/30/2016
 * Time: 8:10 PM
 */

$countries = [
    ["name" => "Austria"],
    ["name" => "Canada"]
];

$json =  json_encode($countries);

var_dump(json_decode($json));