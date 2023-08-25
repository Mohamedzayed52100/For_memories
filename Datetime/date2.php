<?php

  /*
    Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds

  */

  date_default_timezone_set("Africa/Cairo");
  /**
   تغير ال timezone الي القاهرة 
   */

  // $d = date_create("2022-10-01 15:5:3");
  $d = date_create();// return object of date 


  // Year
  echo date_format($d, "Y") . "<br>"; // 2022
  echo date_format($d, "y") . "<br>"; // 22

  echo '<br><br><br><br>***************************************************<br><br><br>';
  // Month
  echo date_format($d, "Y-m") . "<br>";  //year month 
  echo date_format($d, "Y-M") . "<br>"; //year name of month 
  echo date_format($d, "Y-F") . "<br>";//f =>full-text 
  echo date_format($d, "t") . "<br>"; // 30
   /**
  الشهر اللي انا فيه فيه كام يوم 
  */



  echo '<br><br><br><br>***************************************************<br><br><br>';
  // Day
  echo date_format($d, "Y-m-d") . "<br>";/**
  d علشان يجيب صفر قبل اليوم 
  مثلا  01/12/2023
  */
  

  echo date_format($d, "Y-m-j") . "<br>";/**
  j علشان ميجبش صفر قبل اليوم 
  مثلا  1/12/2023
  */
  echo date_format($d, "Y-m-D") . "<br>";
  echo date_format($d, "Y-m-l") . "<br>";//full text of day
  echo date_format($d, "Y-m-l z") . "<br>"; //اليوم الكام من 365 يوم
  echo date_format($d, "Y-m-l djDl") . "<br>";
  echo date_format($d, "Y-m-l S") . "<br>"; //2023-08-Friday th



  echo '<br><br><br><br>***************************************************<br><br><br>';