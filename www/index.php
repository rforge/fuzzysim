<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<p> It includes functions for data preparation, such as converting <b>species lists (long format) to presence-absence tables (wide format)</b>, obtaining <b>unique abbreviations of species names</b>, or <b>transposing (parts of) complex data frames</b>; and a couple of <b>sample data sets</b> for providing practical examples.</p>

<p> It can <b>convert binary presence-absence data to fuzzy occurrence data</b>, using trend surface analysis or inverse distance interpolation, for multiple species simultaneously.</p>

<p> It then calculates <b>fuzzy similarity among (fuzzy) species distributions</b> and/or among <b>(fuzzy) regional species compositions</b>. Currently available similarity indices are Jaccard, S&oslash;rensen, and Baroni-Urbani & Buser.</p>

<br />

<h2> Install and load </h2>
<p>Paste the following commands in the R console (when connected to the internet):</p>
<code>
install.packages("fuzzySim", repos="http://R-Forge.R-project.org")<br />
library(fuzzySim)<br />
help("fuzzySim")
</code>
<br />
<p>If you bump into problems, please go <a href="http://modtools.wordpress.com/packages/fuzzysim/">here</a> for more complete download information.</p>
<br />

<h2> References </h2>
<p>To see how to cite the package, load it in R [by typing <code>library(fuzzySim)</code>]</font> and type <b><code>citation(package="fuzzySim")</code></b></p>

<p> There is also a forthcoming paper about the package, whose provisional reference is:</p>

<p><i> Barbosa A.M. (submitted) A fuzzy implementation of binary similarity indices for spatially aware analysis of biogeographic associations, biotic compositions, and species turnover.</i></p>

<br />

<h2>Find out more</h2>

<p> Go <a href="http://modtools.wordpress.com/packages/fuzzysim/">here</a> for <b>further info</b> (including a <b>user's manual</b>) on the package. </p>

<p> The R-Forge project summary page you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/">here</a>. </p>

</body>
</html>
