<?php 
// header("Location: with css/index.html");
// die(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Premeier League Football</title>
  <style>
  ul
  {
    list-style-type: none;
  }
  li
  {
    font-size: 15px;
  }
  li:before
  {
    content:"@  ";
    color: red;
    font-size: 25px;
  }
</style>
</head>
<body>
  <ul>
    <li><span><a href="with css/index.html">With CSS</a><span></li>
    <li><span><a href="without css/index.html">Without CSS</a><span></li>
  </ul>
</body>
</html>
