<div class="pagecontent">

	<h1>XKCD Password Generator</h1>
    <br><br>
    <img class="snakes" src="password.jpg" alt="Password Image">
    <br><br>
	<h2>Generate new password</h2>
		
		<form method="post" action="index.php">

			<label name="">Number of Words</label>
			<input type="text" id="count" name="count"><br>

			<label name="uppercase">Uppercase first letter</label>
			<input type="checkbox" name="uppercase" value="y" /><br/>

			<label name="symbol">Use a symbol?</label>
			<input type="checkbox" name="symbol" value="y" /><br/>

			<label name="number">Include a number?</label>
			<input type="checkbox" name="number" value="y" /><br />

			<input type="submit" name="submit" value="submit"/>
			
		</form>
    <br><br>
    <div>Your Password is: <?php echo $pword ?></div>
    
    
</div>		























</div>