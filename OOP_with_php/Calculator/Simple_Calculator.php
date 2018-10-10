<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
</head>
<body>
	<form action="calc.php" method="POST">
		
		<table>

		<tr>
			<td>
				<input type="text" name="num1">
			</td>
		</tr>	
		
		<tr>
			<td>
				<input type="text" name="num2">
			</td>
		</tr>	
		
		<tr>
			<td>
			<select name="cal">
			<option value="add">Add</option>
			<option value="sub">Subtract</option>
			<option value="mul">Multiply</option>
			</select>
			<button type="submit">Calculate</button>	
			</td>
		</tr>	
		
		</table>
	</form>
</body>
</html>