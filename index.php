<?php 

include_once ("script/connect.php");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link type="Image/x-icon" href="icons/favicon.ico" rel="icon">
    <link rel="stylesheet" href="style/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
	
    <title>ShortLink</title>
</head>
<body>
<div style="text-align: center"class="container">
    <header>
        <h1>ShortLink</h1> <BR>
        <p>You can make a short link from a long one for free using our service</p>
    </header><br>
	
	<div class="create-link">
        <input type="text" name="text" id="link" placeholder="HTTPS://">
        <button class="link-create" name="submit" id="submit" type="submit">CREATE</button>
	</div>
	
	
	<?php
	
	$count = $db->query("SELECT COUNT(*) FROM links");
	$row = $count->fetch_row();
	?>
	
	
    <div class="info row">
        <div class="info-stat wrap">
            <img src="icons/fire.png" alt="">
            <div class="info-stat-text">
                <p><strong><?=$row[0];?></strong> links</p>
                <p>already create</p>
            </div>
        </div>

        <div class="info-stat wrap">
            <img src="icons/user.png" alt="">
            <div class="info-stat-text">
                <a href="register.php"><strong>Register account</strong></a>
                <p>You will see statistics</p>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
		$('#submit').click(function() {
			var link = $('#link').val();
			
			$.ajax({
			  method: "POST",
			  url: "script/link.php",
			  data: { name: link }
			  })
				.done(function(msg) {
				console.log(msg);
				$('#link').val(msg);
				
				$('#link').select();
				document.execCommand("copy");
				});
		});
	});

</script>


</body>
</html>