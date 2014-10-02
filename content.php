<div class="pagecontent">

	<h1>XKCD Password Generator</h1>
    <br><br>
    <img class="snakes" src="img/password.JPG" alt="Password Image">
    <br>
	<h2>Generate new password</h2>
		<div style="width:90%; margin: 0 auto;">	
			<form method="post" action="index.php">
				<table width="100%" cellpadding="3" cellspacing="0" border="0"
					<tr>
						<td>
							<label name="">Number of Words</label>
							<input type="text" id="count" name="count">
						</td>	
						<td>	
							<label name="uppercase">Uppercase Words</label>
							<input type="checkbox" name="uppercase" value="y" /><br/>
						</td>
						<td>		
							<label name="symbol">Use a symbol?</label>
							<input type="checkbox" name="symbol" value="y" /><br/>
						</td>
						<td>		
							<label name="number">Include a number?</label>
							<input type="checkbox" name="number" value="y" /><br />
						</td>
					</tr>
					<tr>	
						<td>	
							<input type="submit" name="submit" value="submit"/>
						</td>
					</tr>
				</table>			
			</form>
		</div>	
    <br><br>
    <div>Your Password is: <?php echo $pword ?></div>
    
    
</div>		























</div>