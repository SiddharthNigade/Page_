<table border="1" cellspacing="5" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th>No.</th>
			<th>Type</th>
			<th>Size</th>
			<th>Price</th>
			<th>Rating</th>
		</tr>
	</thead>
	<tbody>
		<?php
		require_once('connection.php');
		$result = $conn->prepare("SELECT * FROM nike ORDER BY _id ASC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<tr>
			<td><label><?php echo $row['_id']; ?></label></td>
			<td><label><?php echo $row['type']; ?></label></td>
			<td><label><?php echo $row['size']; ?></label></td>
			<td><label><?php echo $row['price']; ?></label></td>
			<td><label><?php echo $row['rating']; ?></label></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
