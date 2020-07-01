<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form action="/welcome" method="POST">
		@csrf
  		<label for="awalnama">First name:</label>
  		<input type="text" id="awalnama" name="awalnama"><br><br>
  		<label for="akhirnama">Last name:</label>
  		<input type="text" id="akhirnama" name="akhirnama"><br><br>

  		<label>Gender:</label><br><br>
  		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label><br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label><br><br>

		<label for="nationality">Nationality:</label><br><br>
		<select name="nationality" id="nationality">
  		<option value="indonesian">Indonesian</option>
  		<option value="france">France</option>
  		<option value="singapore">Singapore</option>
		</select><br><br>

		<label for="language">Language spoken</label><br><br>
		<input type="checkbox" id="language1" name="language1" value="Bahasa Indonesia">
		<label for="vehicle1"> Bahasa Indonesia</label><br>
		<input type="checkbox" id="language2" name="language2" value="English">
		<label for="vehicle2"> English</label><br>
		<input type="checkbox" id="language3" name="language3" value="Other">
		<label for="vehicle3">Other</label><br><br>

		<label for="bio">Bio:</label><br><br>
		<textarea name="bio" rows="5" cols="50"></textarea><br><br>


		<input type="submit" value="Sign Up">
		</input>
	</form>
</body>
</html>