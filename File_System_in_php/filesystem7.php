<?php

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read &#038; Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
*/


/**
 هفتح الملف واجيب الداتا اللي جوا عن طريق ال loop

 */
echo '<pre>';
print_r(file("elzero.txt")); 
echo '</pre>';
/**
 بترجع Array من كل سطر عنصر في ال array 

 */


echo '<br>';
//  if(true)die;
echo count(file("elzero.txt")); //عدد السطور اللي في ال file 
//  if(true)die;

echo '<br>';
$handle = fopen("elzero.txt", "r");

echo '<br>';
// $line = 1;

// while (! feof($handle)) {///file not end of file

//   echo "Line $line => " . fgets($handle) . "<br>";

//   $line++;

// }


echo '<br>';
for ($i = 0; $i < count(file("elzero.txt")); $i++) {

  echo fgets($handle) . "<br>";

}

fclose($handle);