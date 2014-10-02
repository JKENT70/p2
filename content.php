<div class="pagecontent">

	<h2>XKCD Password Generator</h2>
	<h2>Your current password</h2>
	<h2>Your Password is:</h2>
	<h2>Generate new password</h2>
		
		<form method="POST" action="/index.php">

			<label name="">Number of Words</label>
			<input type="text" id="count" name="count"><br>

			<label name="uppercase">Uppercase first letter</label>
			<input type="checkbox" name="uppercase" value="checkbox"/> <?php echo ($uppercase) ? 'checked="checked"' : '' ; ?> /><br>

			<label name="symbol">Use a symbol?</label>
			<input type="checkbox" name="symbol" value="symbol"/> <?php echo ($symbol) ? 'checked="checked"' : '' ; ?> /><br>

			<label name="number">Include a number?</label>
			<input type="checkbox" name="number"/ value="number"> <?php echo ($number) ? 'checked="checked"' : '' ; ?> /><br>

			<input type="submit" name="submit" value="submit"/>
			
		</form>
</div>		























</div>