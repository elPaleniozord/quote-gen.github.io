<?php

$lines = explode("\n", file_get_contents('quotes.txt'));

$line = $lines[mt_rand(0, count($lines) - 1)];

list($text, $author) = explode('|', $line);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Random quote</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	<div class="container-fluid text-center">
	  <h1><a href="#"> RANDOM QUOTE<br><span class="italics"> generator</span></a></h1> 
	
	  <div class="quotes">
		
			<span class="sentence"><?php echo $text; ?></span><br>
			<span class="author"><?php echo $author; ?></span>
		
	  </div><br>
		<button class="btn btn-default" type="submit" id="get-quote"><a href="index.php">New Quote</a></button>
		
		<div class="footer">Coded by <a href="#"> Jacek Walasik</a>
	</div>
  
  
    </body>
</html>
