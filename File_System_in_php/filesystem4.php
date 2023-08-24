<?php

  /*
    File System Functions
    - basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME
  */

  echo basename(__FILE__) . "<br>"; ///هيجيب اسم الفيل اللي انا فيه 

  echo basename(__FILE__, ".php") . "<br>";


  /**
    لو لقي ال suffix .php في اسم الملف هيشيله 

basename(__FILE__, ".php") . "<br>";
   */

echo "<br><br><br><br>**************************************************<br><br><br><br>";
echo dirname(__FILE__, 1 ) . "<br>";
echo dirname(__FILE__, 2 ) . "<br>";
echo dirname(__FILE__, 3 ) . "<br>";
echo dirname(__FILE__, 4 ) . "<br>";
echo dirname(__FILE__, 5 ) . "<br>";

/**
 هنا هيجب المسار بتاع الملف وكل ما اوزد رقم يرجع خطوة لورا 
 */
echo "<br><br><br><br>**************************************************<br><br><br><br>";






echo realpath(__FILE__) . "<br>";//full path with file name 


echo "<pre>";
  print_r(pathinfo(__FILE__));
  echo "</pre>";
/**
 Array
(
    [dirname] => C:\xampp\htdocs\php_revesion\File_System_in_php
    [basename] => filesystem4.php
    [extension] => php
    [filename] => filesystem4
)
 */
  echo pathinfo(__FILE__)["extension"] . "<br>";
  echo pathinfo(__FILE__)["dirname"] . "<br>";

  echo pathinfo(__FILE__, PATHINFO_DIRNAME). "<br>";