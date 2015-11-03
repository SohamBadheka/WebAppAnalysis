<?php
	include("includes.php");
	include("nav.php");
	
?>
<body>
<div class="jumbotron">
<?php
	
	
				$q=mysql_query("select * from wp_appdata_verification");
			
				echo "<center><h1>Favourite categories are as following </h1></center></div>";
				echo "<table class=\"table\" border=\"2\" align=\"left\">";
				echo"<thead>
				  <tr>
					<th>#</th>
					<th>Category</th>
					<th>Name</th>
					
					</tr>
			  </thead>";
			  $i=1;
				while($row=mysql_fetch_array($q))
				{	
					
					$max=$row['correct']+$row['incorrect'];
					
					if($max>5)
				
					{
						
						echo "<tbody><tr><td>".$i."</td>";
						echo "<td>".$row['category']."</td>";
						echo "<td>".$row['name']."</td>";
						$i++;
						
					}
				
					
				}
				echo "</tr></tbody></table>";
					
	
?>
</body>
</html>