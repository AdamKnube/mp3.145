<html>
	<head>
		<title>Mp3.145 Web Interface</title>
	</head>
	<body bgcolor="#000000" text="#CACACA" style="font-size: 50px">
		<br><br>
		<center><h1><font color="#0000FF">Mp3.145 Web Interface</font></h1></center>
		<br>
		<?php echo '<center>';
			if ($_GET['p']) { system('/home/mp3/mp3.145/clients/play'); }
			elseif ($_GET['u']) { system('/home/mp3/mp3.145/clients/volume_up_10'); }
			elseif ($_GET['d']) { system('/home/mp3/mp3.145/clients/volume_down_10'); }
			elseif ($_GET['b']) { system('/home/mp3/mp3.145/clients/back'); }
			elseif ($_GET['n']) { system('/home/mp3/mp3.145/clients/next'); }
			elseif ($_GET['r']) { system('/home/mp3/mp3.145/clients/random'); }
			elseif ($_GET['f']) { system('/home/mp3/mp3.145/clients/force ' . $_GET['song']); }
			elseif ($_GET['s']) { system('/home/mp3/mp3.145/clients/search ' . $_GET['query']); }
			elseif ($_GET['v']) { system('/home/mp3/mp3.145/clients/volume ' . $_GET['volume']); }
			else { system('/home/mp3/mp3.145/clients/status'); }
			echo '</center><br><br>';
		?>
		<form method="GET" action="/index.php">
				<font size=+10><center>
					<input type="submit" value="Play/Pause" name="p" style="width: 400px; font-size: 50px; height: 120px"/>
				</center><br><center>
					<input type="submit" value="Random On/Off" name="r" style="width: 400px; font-size: 50px; height: 120px"/>
				</center><br><center>	
					<input type="submit" value="Back" name="b" style="width: 400px; font-size: 50px; height: 120px"/>
					<input type="submit" value="Next" name="n" style="width: 400px; font-size: 50px; height: 120px"/>
				</center><br><center>
					<input type="submit" value="Volume -10" name="d" style="width: 400px; font-size: 50px; height: 120px"/>
					<input type="submit" value="Volume +10" name="u" style="width: 400px; font-size: 50px; height: 120px"/>
				</center><br><center>
					<input type="text" value="" name="song" style="width: 400px; height: 120px"/>
					<input type="submit" value="Force" name="f" style="width: 400px; font-size: 50px; height: 120px"/>
				</center><br><center>
					<input type="text" value="" name="query" style="width: 400px; height: 120px"/>
					<input type="submit" value="Search" name="s" style="width: 400px; font-size: 50px; height: 120px"/>
				</center></font>				
			<br><br>
		</form><center>
			<h2><u><font color="#00FF00">Song List:</font></u></h2>
			<?php system('/home/mp3/mp3.145/clients/list'); ?>
		</center>
	</body>
</html>
