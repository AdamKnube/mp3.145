<html>
	<head>
		<title>Mp3.145 Web Interface</title>
		<meta http-equiv="refresh" content="300; url=http://192.168.200.104/index.php">
		<style>
			td { 
				padding: 10px;
				text-align: center; 
			}
		</style>
	</head>
	<body bgcolor="#000000" text="#CACACA" style="font-size: 50px">
		<center><h1><font color="#0000FF">Mp3.145 Web Interface</font></h1></center>
		<?php 
			$query = escapeshellarg($_POST['query']);
			$volume = escapeshellarg($_POST['volume']);
			$what = escapeshellarg($_POST['what']);
			if ($_POST['edge']) { exec('/home/thepub/bin/edge > /dev/null &'); }
			elseif ($_POST['fm96']) { exec('/home/thepub/bin/fm96 > /dev/null &'); }
			elseif ($_POST['srch']) { 
				echo '<center>';
				system('/home/thepub/bin/search ' . $query);
				echo '</center><br>';
			}
			elseif ($_POST['volume']) { exec('/home/thepub/bin/volume ' . $volume);  }
			elseif ($_POST['stop']) { exec('/home/thepub/bin/stop'); }
			elseif ($_GET['force']) { exec('/home/thepub/bin/play ' . $what . ' > /dev/null &'); }
		?>
		<form method="POST" action="http://192.168.200.104/">
			<center><table border=1 width=80%>
				<tr><?php system('/home/thepub/bin/radio-info'); ?></tr>
				<tr>
					<td colspan=2 width=50% align=center><input type="text" value="" name="query" style="width: 400px; height: 120px"/></td>
					<td colspan=2 width=50% align=center><input type="submit" value="Search" name="srch" style="width: 400px; font-size: 50px; height: 120px"/></td>
				</tr><tr>
					<td colspan=2 width=50%><input type="submit" value="Edge" name="edge" style="width: 400px; font-size: 50px; height: 120px"/></td>
					<td colspan=2 width=50%><input type="submit" value="FM96" name="fm96" style="width: 400px; font-size: 50px; height: 120px"/></td>
				</tr><tr>
					<td width=25% align=center><input type="submit" value="25%" name="volume" style="width: 200px; font-size: 50px; height: 120px"/></td>
					<td width=25% align=center><input type="submit" value="50%" name="volume" style="width: 200px; font-size: 50px; height: 120px"/></td>
					<td width=25% align=center><input type="submit" value="75%" name="volume" style="width: 200px; font-size: 50px; height: 120px"/></td>
					<td width=25% align=center><input type="submit" value="100%" name="volume" style="width: 200px; font-size: 50px; height: 120px"/></td>
				</tr><tr>
					<td colspan=4 width=100% align=center><input type="submit" value="Stop Music" name="stop" style="width: 600px; font-size: 50px; height: 120px"/></td>
				</tr>
			</table></center>				
		</form>
	</body>
</html>
