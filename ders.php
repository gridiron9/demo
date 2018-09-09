<?php 
function chess($n)
{
	for ($i = 0; $i < $n; $i++) {
		echo "<tr>";
		for($j = 0; $j < $n; $j++) {

			if (($i + $j) % 2 == 0) {
				$class = 'black';
			} else {
				$class = 'white';
			}
			echo "<td class='" . $class . "'></td>";
		}

		echo "</tr>\n";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shahmat taxtasi</title>
	<style>
		table{
			border: 1px solid #ccc;0

		} 
		table td {
			width: 50px;
			height: 50px;
		}
		table td.black {
			background: #000;
		} 
		table td.white {
			background: #fff;
		}
	</style>
</head>
<body>
	<table>
		<tbody>
			<?php chess(5); ?>
		</tbody>
	</table>
</body>
</html> 