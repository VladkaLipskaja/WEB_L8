<HTML>
<HEAD>
<meta charset="utf-8">
<TITLE>Реакція на подію change в тезі select</TITLE>
<link rel="stylesheet" href="style72.css">
</head>
<body>
<center>
	<table name="table1" class="products">
		<tr>
			<th>Products</th>
			<th>Price</th>
			<th>Quantity</th>
		</tr>
		<tr>
			<td>Apple</td>
			<td>14 ₴</td>
			<td>
			<?php 
			include '72h.php';
			echo count.value;
			?>				
			</td>
		</tr>
		<tr>
			<td>Banana</td>
			<td>45 ₴</td>
			<td><?php 
			include '72h.php';
			?>	</td>
		</tr>
		<tr>
			<td>Orange</td>
			<td>33 ₴</td>
			<td><?php 
			include '72h.php';
			?>	</td>
		</tr>
		<tr>
			<td>Pineapple</td>
			<td>58 ₴</td>
			<td><?php 
			include '72h.php';
			?>	</td>
		</tr>
	</table>
</center>
</body>
</html>