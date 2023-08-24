<?php

  /*
    File System Functions
    - disk_total_space()
    --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
    - disk_free_space() || diskfreespace()
    --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
    - file_exists(Path)
    --- Checks If A File Or Directory Exists
    - filesize(File_Name)
    --- Get Space In Bytes
  */

  echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>";///بتجيب المساحة بتاع مثلا ال C or D drive 
  //convert to GB
  echo round(disk_free_space("C:") / 1024 / 1024 / 1024) . "<br>";//بتجيب المساحة الفاضية 
  var_dump(file_exists("elzero.txt")); //هل الملف ده موجود قي المشروع ولا لأ
  echo '<br>';
  echo filesize("elzero.txt"); ///بتجيب مساحة الملف ده 