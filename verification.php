<?php
		
		include("includes.php");
		include("nav.php");

		$q = mysql_query("select * from wp_appdata_verification");
		
		
		echo "<table class=\"table\" border=\"2\" align=\"left\">";
		$i=1;
		 echo"<thead>
				  <tr>
					<th>#</th>
					<th>Category</th>
					<th>SubCat</th>
					<th>Votes</th>
					<th>Verification</th>
					
					</tr>
			  </thead>";
		while($row=mysql_fetch_array($q))
		{
			
			$verification=$row['correct']-$row['incorrect'];
			$max=$row['correct']+$row['incorrect'];
			echo "<tbody>
				  <tr>
					<td>".$i."</td>";
				   
			echo "<td>".$row['category']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$max."</td>";
			echo "<td>".$verification."</td></tr></tbody>";
			
			$i++;
		} 
		echo "</table>";
		
	
?>