<?php

/*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path

*/




/**
 file_get_contents بتقرأ محتور الملف ك string 
 file()  بتقرأ محتور المف ك array

 */
echo get_include_path() . "<br>";/**

*/
echo '<br>';
echo '<br>';
echo file_get_contents("elzero.txt");//, true, NULL, 4, 5);
echo '<br>';
echo '<br>';
// echo file_get_contents("elzero.txt", true, NULL, 4, 5);

// echo file_get_contents("https://elzero.net");
echo '<br>';
echo '<br>';

 //print_r(file("https://elzero.net"));

echo '<br>';
echo '<br>';


//لو المف مش موجود هيعمله وهبعمل override علي الكلام اللي جوا 
echo file_put_contents("elzeror.txt", "\r\nThis Is New Line", FILE_APPEND);

echo '<br>';
echo '<br>';
echo '<br>';