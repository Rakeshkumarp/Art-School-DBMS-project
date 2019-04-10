<!DOCTYPE html>
<html>
<title>Error!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./w3.css">
<body>

<button class="w3-button w3-pale-red w3-display-topmiddle" onclick="document.getElementById('id01').style.display='block'" style="margin-top: 10px;">Click to find Error!</button> 

<div id="id01" class="w3-panel w3-pale-red w3-display-container w3-display-top" style="display:none ; margin-top: 50px;">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-red w3-display-topright">x</span>
  <p>Please check the Username or Password.</p>
 
</div>

</body>
</html> 
