<?php
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != "..")
      {
              $thelist .= '<a href="'.$file.'">'.$file.'</a>'.'<br>';
          }
       }
  closedir($handle);
  }
  <p style="font-weight: bold; font-size: 10pt">List of files:</p>
  <p style="font-weight: bold; font-size: 10pt; color: #560D1C"><?=$thelist?></p>
?>