<?php

  /*
    File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode
    --- [r] For Read => Pointer At The Beginning
    --- [r+] For Read & Write => Pointer At The Beginning
    --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
    --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

    - fgets(File[Required], Length[Optional])
    --- Get A Line From An Open File
    --- Length => Number Of Bytes To Read || End Of Line If No Length
    - fread(File[Required], Length[Required])
    --- Get A Data From An Open File
    --- Length => Maximum Number Of Bytes To Read
    - fclose(File[Required])
    --- Closes An Open File Pointer
  */

  $handle = fopen("elzero.txt", "r");


  /**
   r for reading 
   r+ for reading and writing 
   w for write and create the file if not exists 
   w+ for read and  write and create the file if not exists 
   */

  // echo fgets($handle, 4);

  echo fread($handle, 1024);

  fclose($handle); //قفل الملف 

  