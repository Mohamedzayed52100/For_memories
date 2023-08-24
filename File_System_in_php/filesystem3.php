<?php

  /*
    File System Functions
    - chmod(File[Required], Mode[Required])
    --- Change Mode
    - fileperms(Name)
    --- Gets File Permissions
    - clearstatcache()
    --- Clear Cache

    - You Can Change Owner chown()
    - You Can Change Group chgrp()
  */

   ///mkdir("Y", 0700);

   /*
   عملت فولدر اسمه y 
   7 permission for admin
   0 no permission for group 
   0 no permission for user 

   */



  /*
  نغير ال permsission بتاع ال file بعد ما انشأه 


  */
  echo fileperms("Y") . "<br>";//file permission 
  chmod("Y", 0644);//change mode 

  //غيرت كدا ال permission 

  clearstatcache();
  //نضف ال cache 

  echo fileperms("Y") . "<br>";//file permission
  