<!DOCTYPE html>
<html>
<head>
	<title>NFQ Books</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <script src="styles/jquery-1.12.4.js"></script>
    <script src="styles/jquery.dataTables.min.js"></script>
</head>
<body>
	<h1 align="center">Books</h1>

	<script>
		$(document).ready(function() {
    		$('#example').DataTable();
		} );
	</script>

	<table id="example" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th scope="col">Title</th>
				<th scope="col">Year</th>
				<th scope="col">Author</th>
				<th scope="col">Genre</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($books as $book) : ?>
				<tr>
					<td><a href="/about?id=<?php echo $book->id; ?>"><?php echo $book->Title; ?></a></td>
					<td><?php echo $book->Year; ?></td>
      				<td><?php echo $book->Author; ?></td>
      				<td><?php echo $book->Genre; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>