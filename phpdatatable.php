<HTML>
<HEAD>
<TITLE>
	Displaying tables with MySQL
</TITLE>
</HEAD>
<BODY>
<H1>
	Displaying tables with MySQL
</H1>
<?PHP
	$connection = mysql_connect("localhost","root","redhat")
		   or die("Couldn't connect to server");
	$db = mysql_select_db("produce", $connection)
	   or die("Couldn't select database");
	$query = "SELECT * FROM fruit";
	$result = mysql_query($query) or die("Query failed: " . mysql_error()); 
	echo "<TABLE BORDER='1'>";
	echo "<TR>";
		echo "<TH> Name </TH>"; 
		echo "<TH> Number </TH>"; 
	echo "</TR>";
	while($row = mysql_fetch_array($result))
	{
		echo "<TR>";
		echo"<TD>", $row['name'], "</TD> <TD>", $row['number'], "</TD>";
		echo "</TR>";
	}
	echo "</TABLE>";
	mysql_close($connection);
?>
</BODY>
</HTML>
	
