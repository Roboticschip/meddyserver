
<html>

<body>
	<h2><?php echo $data; ?></h2>

	With great power, comes great responsibility. <br><br>

	<form action="addQuestion" method="POST">
		Question : <input type="text" size=100 name="question"/>
		<br>
		A: <input type="text" name="option_a"/>
		
		B: <input type="text" name="option_b"/>
		<br>
		C: <input type="text" name="option_c"/>
		
		D: <input type="text" name="option_d"/>
		<br><br>
		Answer:<select name="answer">
             <option value="A">A</option>
             <option value="B">B</option>
             <option value="C">C</option>
			 <option value="D">D</option>
             </select>
		<br><br>
		
		<br><br><br>
		<input type="submit" value="Submit"/>
	</form>
</body>

</html>