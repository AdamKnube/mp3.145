<html>
	<head>
		<title>Mp3.145 Web Interface</title>
	</head>
	<body bgcolor="#000000" text="#CACACA">
		<br><br>
		<center><h1><font color="#0000FF">Mp3.145 Web Interface</font></h1></center>
		<br>
		<?php echo '<center>';
			if ($_GET['p']) { system('/home/mp3/bin/play'); }
			elseif ($_GET['u']) { system('/home/mp3/bin/volume_up_10'); }
			elseif ($_GET['d']) { system('/home/mp3/bin/volume_down_10'); }
			elseif ($_GET['b']) { system('/home/mp3/bin/back'); }
			elseif ($_GET['n']) { system('/home/mp3/bin/next'); }
			elseif ($_GET['r']) { system('/home/mp3/bin/random'); }
			elseif ($_GET['f']) { system('/home/mp3/bin/force ' . $_GET['song']); }
			elseif ($_GET['s']) { system('/home/mp3/bin/search ' . $_GET['query']); }
			echo '</center><br><br>';
		?>
		<form method="GET" action="/index.php">
				<center>
					<input type="submit" value="Play/Pause" name="p">
				</center><br><center>	
					<input type="submit" value="Back" name="b">
					<input type="submit" value="Next" name="n">
				</center><br><center>
					<input type="submit" value="Volume -10" name="d">
					<input type="submit" value="Volume +10" name="u">
				</center><br><center>
					<input type="text" value="" name="song">
					<input type="submit" value="Force" name="f">
				</center><br><center>
					<input type="text" value="" name="query">
					<input type="submit" value="Search" name="s">
				</center><br><center>
					<input type="submit" value="Random On/Off" name="r">
				</center>				
			<br><br>
		</form><center>
			<h2><u><font color="#00FF00">Song List:</font></u></h2>
			<?php system('/home/mp3/bin/list'); ?>
		</center>
	</body>
</html>
