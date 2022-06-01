<?php

include_once ('script/connect.php');

if (!$_SESSION['profile']['id']){
	header('Location: index.php');
}


$links = $db->query("SELECT * FROM profile WHERE id = '".$_SESSION['profile']['id']."'");

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="Image/x-icon" href="icons/favicon.ico" rel="icon">
	<title>ShortLink</title>
    <link rel="stylesheet" href="style/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
</head>

<body>
	<?php
	
	$sql = $db->query("SELECT COUNT(*) FROM links WHERE id_owner = '".$_SESSION["profile"]["id"]."'");
	$total_links = $sql->fetch_row();
	
	$sql = $db->query("SELECT SUM(transitions) FROM links WHERE id_owner = '".$_SESSION["profile"]["id"]."'");
	$total_transitions = $sql->fetch_row();
	
	
	?>
	<div class="center">
    <div class="container-profile">
        <div class="profile-header">
            <p><strong>Welcome, <?=$_SESSION['profile']['login']?></strong></p>
            <p>You have <strong><?= $total_links[0]?></strong> link and <strong><?= $total_transitions[0]?></strong> transitions</p>
        </div>
		
		<div class="create-link">
		<h3>Create link:</h3>
        <input style="border:0.1px solid black" type="text" name="text" id="link" placeholder="HTTPS://">
        <button class="link-create" name="submit" id="submit" type="submit">CREATE</button>
		</div>
        
		<h4>Your links:</h4>
		<?php 
	
	$sql = $db->query("SELECT * FROM links WHERE id_owner = '".$_SESSION["profile"]["id"]."'");
	while ($info = $sql->fetch_assoc()){
	?>
        <div class="profile-stats">
            <div class="stat wrap">
                <img src="icons/link.png" alt="">
				<div>
                <p>Original: <strong><a href="<?= $info["full_link"]?>"><?= $info["full_link"]?></a></strong></p>
                <p>Short: <strong><a href="http://pavlobakum.fun/short/href.php?id=<?= $info["short_link"]?>">http://pavlobakum.fun/short/href.php?id=<?= $info["short_link"]?></a></strong></p>
				</div>
            </div>
			

            <ul>
                <li>Transitions: <?= $info["transitions"]?></li>
                <li>Unique transitions: <?= $info["unique_transitions"]?></li>
            </ul>

            <p>Date create: <strong><?= $info["date"]?></strong></p>
        </div>
		<?php } ?>
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