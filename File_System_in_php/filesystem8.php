<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
*/

$handle = fopen("elzero.txt", "r");

echo ftell($handle) . "<br>"; // 0 //

/**
 ftell بترجع ال current postion of pointer 
 
 يعني ال pointer واقف فين دلوقتي 
 
 */
echo fgets($handle) . "<br>"; //حات اول سطر في الفيل 

echo fgets($handle) . "<br>"; //كدا حات تاني سطر في الفيل 

echo ftell($handle) . "<br>"; // 0 //



 rewind($handle); /*
 بيرجع ال pointer في اول position 

 */

 echo fgets($handle) . "<br>"; // Elzero

 echo ftell($handle) . "<br>"; // 8

echo fgets($handle) . "<br>"; // Elzero

fseek($handle, -6, SEEK_END); //فكك منها 


/**
 
*/

echo fgets($handle) . "<br>"; // zero Web School

fclose($handle);

echo mb_strlen("School", "8bit");