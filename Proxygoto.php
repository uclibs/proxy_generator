<!DOCTYPE html>
<html>
	<?php $path2 = $_SERVER['DOCUMENT_ROOT'];
include($path2. "/libs/templates/https_main_generic.php"); 
?>
<link href="/libs/styles/allpages.css" rel="stylesheet" type="text/css" />
<link href="/libs/styles/forms.css" rel="stylesheet" type="text/css" />
<?php 
//start the page
echo $top;?>
           
    <form id=SPUForm action="/proxyuser/spu_redirect.php">
      Enter URL: <input type="text" name="spu" id="spu" />
      <input type="submit" name="action" value="Enter">
    </form>
<?php echo $bot;?>
  </body>
</html>
