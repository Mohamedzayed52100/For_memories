<?php

  /*
    Date And Time Functions

    - date_interval_create_from_date_string()
    - date_add()
    - date_sub()
    - date_modify()

  */

  date_default_timezone_set("Africa/Cairo");

  $d = date_create();

  // date_add($d, date_interval_create_from_date_string("1 year 2 months 5 days"));
  /**
  زودت كدا سنة وشهرين و 5 ايام علي التاريخ الحالي 
  */

  // date_sub($d, date_interval_create_from_date_string("1 year 2 months 5 days"));
  /**
  نقصت  كدا سنة وشهرين و5 ايام علي التاريخ الحالي 
  */


  date_modify($d, "+20 months");

  /**
   كدا زودت 20 شهر علي التاريخ الحالي 
   بتاخد string 
   */

  echo date_format($d, "Y/m/d H-i-s a");