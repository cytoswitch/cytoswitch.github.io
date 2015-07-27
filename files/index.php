<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<!--CytoSwitch project Webpage-->

<head>
	<title>CytoSwitch</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" media="screen" href="files/style.css" />
	<link rel="shortcut icon" href="files/otsicon.png" type="image/x-icon" />
	<meta name="author" content="Oliver Thorn-Seshold" />
	<meta name="description" content="CytoSwitch website" /> 
	<meta name="keywords" content="Cytoswitch Photostatin Photostatins Photopharmacology Probes Chemotherapy BioVaria MBPW Cyto Switch Oliver Torvald Thorn-Seshold Chimie Chemie Chemistry Photo-Can PhotoCan LMU Munich Munchen"/>
</head>

<body>

<!-- Header-->
<div id="header">
	<img id="logoleft" src="files/cytoswitchlogo.png" alt="CytoSwitch logo" />
	<h2>Cyto<i>Switch</i> Project</h2>
</div><!-- End of Header div -->

FRAME X<br />
<iframe name="indexx" src="indexx.php" width="50%" frameborder="0"></iframe><br />
FRAME C<br />
<iframe name="indexc" src="indexc.php" width="70%" frameborder="0"></iframe><br />

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
?>
<p style="font-weight: bold; font-size: 10pt">List of files:</p>
<p style="font-weight: bold; font-size: 10pt; color: #560D1C"><?=$thelist?></p>

</body>
</html>