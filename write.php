<!DOCTYPE html>
<html lang="en" dor="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="write.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>GoType</title>
</head>
<body>
	<?php
		echo "This is PHP.";
	?>
    <nav>

        </label>
        <label class="logo">GoType Start</label>
		<ul>
			<li><a href="cat.html">HOME</a></li>
			<li><a class="active">START</a></li>
		</ul>
    </nav>
	<div class="box">
		<h2>NOTES</h2>
		<form action="" method="">
            <center>
                <textarea name="note" rows="15" cols="50" placeholder="Start writing your notes here."></textarea>
            </center>
				<input type="submit" value="Save">
		</form>
	</div>
</body>
</html>
<?php
	extract($_REQUEST);
	$file=fopen("save.txt","a");
	fwrite($file, $note ."\n");
	fclose($file);
?>
