<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once __DIR__ .'/../vendor/autoload.php';

use afiqiqmal\CountryHoliday\Holiday;

echo Holiday::init()->country("usa")->getRegionHoliday("arizona","2017")->get();
