<?php

/*
  File System Functions

  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathnames Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir()  //
  - readdir()
  - closedir()
*/

echo "<pre>";
print_r(glob("Old/*.*"));

/**
 عملت فولدر Old
 معني ال function حات المتدادات بتاعت الملفات اللي في هذا الملف او المجلد
 
 */
echo "</pre>";

// Rename => Same Place
// rename("Old/Test.txt", "Old/Testing.txt");

// Rename => Other Place => "Cut" || "Move"
// rename("Old/Testing.txt", "New/Testing_2.txt");

// Move To Other Place
// rename("Old/Elzero.pptx", "New/Elzero.pptx");

// Copy Without Rename
// copy("Old/Info.docx", "New/info.docx");

// Copy With Rename
// copy("Old/Work.txt", "New/working.txt");




unlink("Old/Work.rtf");
//delete