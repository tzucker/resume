<!DOCTYPE html>
<html><head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Playfair+Display|EB+Garamond' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <title>Aram Zucker-Scharff</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
                //Hide the graf by default first
				$('.findme span').hide();
                
				//Select a function to execute on hover of the h2 tag in that div
				//The toggle will toggle the display of the paragraph.
                $('.findme').hover(function()
                {
                    //The documentation on toggle has a bunch of nifty effects that can be applied.
					$('.findme span').toggle();
				
				})
                
            });		
		</script>

		<link rel="stylesheet" href="style.css" media="screen">
		
    </head>