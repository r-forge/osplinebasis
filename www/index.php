
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
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
<p>orthogonalsplinebasis releases are available from <a href="http://cran.r-project.org/web/packages/orthogonalsplinebasis/index.html">CRAN</a> and can be installed by running <code>install.package("orthongalsplinebasis")</code> from inside a running R session.

<p> The standard basis functions for B splines are shown in the plot</p>

<p><img src="images/base.png" alt="Standard Basis Functions"/><br/>The standard basis functions for cubic splines.</p>

<p>Sometimes it is desireable to work with the basis after they have been transformed to be orthogonl</p>

<p><img src="images/obase.png" alt="Orthogonal Basis Functions"/><br/>The basis functions after being transformed to be orthogonal.</p>

<p>Through creative matrix representations this orthogonalizing transformation can be computed very fast without any calculations more that matrix multiplication, meaning that calculations are acurate to machine precision.  Other caculus computation are similarly just as easy such as derivatives and integrals.<p> 

<p><img src="images/ibase.png" alt="Integrated Orthogonal Basis Functions"/><br/>The integrated orthogonal basis functions.</p>

<p><a href="plots.R">The script for generating these functions</a></p>

<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

</body>
</html>
