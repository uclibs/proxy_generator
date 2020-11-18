<!DOCTYPE html>
<html>
	<?php $path2 = $_SERVER['DOCUMENT_ROOT'];
include($path2. "/libs/templates/https_main_generic.php"); 
?>
    
<link href="/libs/styles/allpages.css" rel="stylesheet" type="text/css" />
<link href="/libs/styles/forms.css" rel="stylesheet" type="text/css" />
<?php echo $top;?>
    <h1>Proxy Link Generator</h1>
    <h2> Enter your link below to transform it to a proxy link</h2>
    <p>&nbsp;</p>
    <hr>
<script language="javascript">
 
<!--//--><![CDATA[// ><!--
 
	function makeLink() { 
	var oin=document.frm.intext; 
	var oout=document.frm.outtext; 
	var intxt=oin.value; 
	if(intxt.length==0) { 
	oin.focus(); 
	alert("No URL entered!"); 
	} 
	
	else { 
	var prep="http://proxy.libraries.uc.edu/login?url="; 
	var rc=intxt.indexOf('http://proxy.libraries.uc.edu/login?url=') 
	var rd=intxt.indexOf('.proxy.libraries.uc.edu') 
	var wellFormedHttp=intxt.indexOf('http://') 
	var wellFormedHttps=intxt.indexOf('https://') 
	if(wellFormedHttp=='0'||wellFormedHttps=='0'){ 
	//alert("Matched http://"+wellFormed); 
	//} 
	if(rc==-1) { 
	if(rd==-1){ 
	oout.value=prep+intxt; 
	oout.focus(); 
	oout.select(); 
	} 
	else{ 
	alert("That is a translated EzProxy URL and shouldn't be used. Click OK to fix"); 
	intxt = intxt.replace(/.proxy.libraries.uc.edu/g,"") 
	oout.value=prep+intxt; 
	oin.focus(); 
	oin.select(); 
	} 
	} 
	else { 
	alert("That is already an EzProxy prefixed URL, so no change is needed"); 
	oout.value=""; 
	oin.focus(); 
	oin.select(); 
	} 
	} 
	else{ 
	alert("The URL source URL doesn't start with http:// or https:// or contains multiple entries, please enter a valid URL like https://someaddress.com"); 
	oout.value=""; 
	oin.focus(); 
	oin.select(); 
	} 
	} 
	
	} 
	
//--><!]]>
</script><form name="frm" id="frm">
<h3>1. Copy and paste your source URL here:</h3>
<p><textarea aria-label="Source URL" cols="60" name="intext" rows="5"></textarea><br />
 </p>
<h3>2. Click this:</h3>
<p><input onclick="makeLink();" type="button" class="btn" value="CREATE LINK" /><br />
 </p>
<h3>3. Copy, use, and share the resulting link</h3>
<p><textarea aria-label="Resulting Link" cols="60" name="outtext" rows="5"  id="myInput"></textarea></p>
<p><br />
 
</p>
<h3>URL Encoding</h3>

</form>
<!--copy to clipboard-->
<p>Click on the button to copy the text from the text field. Try to paste the text (e.g. ctrl+v) afterwards in a different window, to see the effect.</p>
   <li>Copy the text above:  </li>
   <button onclick="myFunction()" class="btn">COPY LINK</button> 
   <p>&nbsp;</p>
   <li >or
     <input type="reset" class="btn" value="START OVER- CLEAR FORM" />
     </li>
   </p>
  

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
<?php echo $bottom;?>
</body>
</html>

