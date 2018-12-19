
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>

	<div id="form">
	<center>
		<div id="form_header">
		<h1> FILL UP THE FORM</h1>
		</div>
		
		<div id="form_box">
		<form method="POST" action="core.php">
		
		<h2>GIVE YOU NAME</h2>
		<input id="inp_name" type="text" name="us_name" placeholder="name" />
		<h2>GIVE YOU ADDRESS</h2>
		<input id="inp_addr" type="text" name="us_addr" placeholder="address" />
		<br />
		<input id="inp_sub" type="submit"  />
		
		
		</form>
		</center>
		</div>
		
		
		<table>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>ADDRESS</th>
		</tr>
		
		<?php
		
		require_once('setup.php');
		
		$comequery ="SELECT * FROM `d_b1` WHERE 1";
		
		
		$comerun = mysqli_query($con,$comequery);
		
		
		

		while($db = mysqli_fetch_array($comerun)){
			
		
		?>
		
		
		<tr>
			<td><?php echo $db['id']; ?></td>
			<td><?php echo $db['name']; ?></td>
			<td><?php echo $db['addr']; ?></td>
			
		</tr>
		
		<?php } ?>
		</table>
		
		
		
		
		
		
		
		
		
		
	</div>
</body>
</html>