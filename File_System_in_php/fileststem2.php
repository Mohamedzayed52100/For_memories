<?php


///الفولدر اسمه directory is_dir

  /*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])
  */


  ///الفولدر اسمه directory is_dir

  ///الفولدر اسمه directory is_dir

   var_dump(is_dir("Lessons")); //هل يوجد فولدر اسمه lessons 
  echo '<br>';
  var_dump(is_dir("elzero.txt"));  //هل فيه فولدر اسمه elzero.txt =>false
  echo '<br>';
 // mkdir("Test/Upload/Files", 0777, true); //اعملي فولدر test then folder upload then files folder 
  //الرقم ده متغير معني 7 انه ليه صلاحية يعمل عمليات علي الفولدر ومعني 0 انه ملوش صلاحة الادمن اليوسر الجروب 

  echo '<br>';
  ////rmdir("Test/Upload/Files");  ///علشان لو عايز امسح فولدر 

  /*
  لازم علشان امسح الفولدر ميكونش جواه فولدر 
  */
  var_dump(file_exists("Test/Upload/Files"));