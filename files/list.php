 <?php
//Open images directory
$dir = opendir("test");

//List files in images directory
while (($file = readdir($dir)) !== false)
  {
   if ($file != "." && $file != "..")
      {
  echo '<a href="'.$file.'">' . $file . '</a>'."<br />";
  }
  }
  closedir($dir);
?> 