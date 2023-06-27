<?php include("head2.html")
?>
<body>
<div class="regf">
<h2>REGISTRATION FORM</h2>
</div>
<div class="register">
<form action="connect.php" method="post">
<br><br>
<label for="username">NAME</label>
<input type="text" size="55" name="n" placeholder="Enter your name" required />
<br><br>
<label for="dob">DOB</label>
<input type="date" name="d" />
<br><br>
<label for="gender">GENDER</label>
<input type="radio" value="male" name="g" />MALE
<input type="radio" value="female" name="g" />FEMALE
<input type="radio" value="OTHERS" name="g" />OTHERS
<br><br>
<label for="email">EMAIL</label>
<input type="email" size="50" name="e" />
<br><br>
<label for="password">PASSWORD</label>
<input type="password" maxlength="8" name="p" />
<br><br>
<label for="days">NO.OF DAYS</label>
<input type="number" size="10" name="a"  />
<br><br>
<label for="dept">MEMBERSHIP</label>
<select name="s">
<option value="EEE">BRONZE</option>
<option value="CSE">SILVER</option>
<option value="IT">DIAMOND</option>
<option value="BCA">PLATINUM</option>
</select>
<br><br>
<input type="submit" value="Sumbit">
<input type="reset" value="Reset">
</form>
</div>

</form>
</body>
<?php include("foot.html")
?>
