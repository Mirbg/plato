<!DOCTYPE html >
<html >
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$(function(){
	$('a#Add').on('click',function(e){
		e.preventDefault;
		numRows = $('#addText tr').length;
		$('table#addText tbody').append('<tr><td><input type="text" name="word'+numRows +'" id="word'+ numRows +'" /></td><td><input type="text" name="regex'+numRows +'" id="regex'+ numRows +'" /></td></tr>');	
	});
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ring</title>
</head>

<body>


<?php
$arrayjson=json_encode($_POST);

$myfile=fopen("gk_art.json","w") or die("Unable to open file!");

fwrite($myfile, $arrayjson);

fclose($myfile);
?>

<form id="inputText" method="post" action="">
<label for="title">Title</label><br />
<input type="text" name="title" id="title">
<br /><br />
<label for="Lan1">Language</label><br /> 
    <select name="Lan1" id="Lan1">
      <option>English</option>
      <option>Ancient Greek</option>
      <option>Ancient Hebrew</option>
    </select>
    <br /><br />
    
   
<table id="addText">
  <thead>
    <th><label for="Words">Words to find</label></td>
    <th><label for="RegEx">Regular expression</label></td>
  </thead>
  <tbody>
  <tr>
    <td>
      
      <input type="text" name="word1" id="word1" />
    </td>
    <td>
      
      <input type="text" name="regex1" id="regex1" />
    </td>
  </tr>
  <tr>
    <td>
      
      <input type="text" name="word2" id="word2" />
    </td>
    <td>
      
      <input type="text" name="regex2" id="regex2" />
    </td>
  </tr>
  </tbody>
</table>

<a href="#" id="Add">Add</a>
 
 <br />
 <br /> 

<label for="text">Copy and Paste the text</label><br />
<textarea name="text" id="text" label="" cols="80" rows="15"></textarea>
<br /> 
<br />
  <input type="submit" value="Submit" />
  
 </form>
<p>&nbsp;</p>
</body>
</html>
