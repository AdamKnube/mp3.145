<html>
	<head>
		<title>Mp3.145 Web Interface</title>
		<?php
			$thispage = $_SERVER['SERVER_ADDR'] . '/' . $_SERVER['PHP_SELF'];
			echo "<meta http-equiv=\"refresh\" content=\"300\"; url=\"http://$thispage\">";
			echo '<style>
				td { 
					padding: 10px;
					text-align: center; 
				}
			</style>
		</head>';
	echo '<body bgcolor="#000000" text="#CACACA" style="font-size: 50px">
		<center><h1><font color="#0000FF">Mp3.145 Web Interface</font></h1></center>';
			if ($_POST['edge']) { exec('/home/http/bin/edge > /dev/null &'); }
			elseif ($_POST['fm96']) { exec('/home/http/bin/fm96 > /dev/null &'); }
			elseif ($_POST['srch']) { 
				echo '<center>';
	 			$query = escapeshellarg($_POST['query']);
				system('/home/http/bin/search ' . $query);
				echo '</center><br>';
			}
			elseif ($_POST['volume']) { 
				$volume = escapeshellarg($_POST['volume']);
				exec('/home/http/bin/volume ' . $volume);
			}
			elseif ($_POST['stop']) { exec('/home/http/bin/stop'); }
			elseif ($_GET['force']) { 
				$what = escapeshellarg($_GET['what']);
				exec('/home/http/bin/play ' . $what . ' > /dev/null &'); 
			}
		
			echo "<form method=\"POST\" action=\"http://$thispage\">";
		?>
			<center><table border=1 width=80%>
				<tr><?php system('/home/http/bin/radio-info'); ?></tr>
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
