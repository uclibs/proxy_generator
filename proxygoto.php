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
    <h1> Proxy Go To</h1>
    <p> Use this tool to enter a link, sign in to proxy. and be redirected to your resource.  
     <form id=SPUForm action="/proxyuser/spu_redirect.php">
      Enter URL: <input type="text" name="spu" id="spu" />
      <input type="submit" name="action" class="btn" value="Enter">
    </form>
<?php echo $bottom;?>
  </body>
</html>