<!DOCTYPE html>
<html>
<head>
	<title>Existing accounts</title>
</head>
<body>
	<style>
		.table{
			margin: auto;
			display: block;
		}
	</style>
	<?php require_once "connection.php" ?>
	<div class="container">
		<table class="table">
			<th>Id</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<tbody>
				<?php while($row=$result->fetch_assoc()):?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['username'];?></td>
					<td><?php echo $row['password'];?></td>
				</tr>
			<?php endwhile;?>
			</tbody>
		</table>
	</div>

</body>
</html>