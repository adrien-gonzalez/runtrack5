<html>
	<head></head>
	<body>

<div class="site-index">

    <div class="jumbotron">
        <h1></h1>
    </div>

    <div> 
        <table style="text-align: center; width: 300px; border: 2px solid;">
				<tr>
					<th>Prénom</th>
					<th>Nom</th>
					<th>Email</th>
				</tr>
	<?php
	 for($i=0; $i < sizeof($users); $i++)
		{
			echo '<tr>';
			echo '<td>'.$users[$i]["firstname"].'</td>';
			echo '<td>'.$users[$i]["lastname"].'</td>';
			echo '<td>'.$users[$i]["email"].'</td>';
			echo '</tr>';
		}
		?>
		</table>
    </div>
</div>
</body>
</html>