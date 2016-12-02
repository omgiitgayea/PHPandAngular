<?php
/**
 * Created by PhpStorm.
 * User: GodaiYuusaku
 * Date: 12/2/16
 * Time: 7:35 AM
 */

require "../classes/CountryRepository.php";

header("Content-type: application/json");
echo ")]}'\n";

$countries = CountryRepository::getCountries();

echo json_encode($countries);