<!DOCTYPE html>
<html>
<body>

<h1>Registration Form</h1>

<P> <a href="login.php"> <i> <b> LOG IN </b> </i></a> </P>

<form action="formaction.php" method="POST">

 <fieldset>
  <legend>Basic Information:</legend>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  
  <label for="gender"> GENDER:</label><br>
  <input type="radio" id="gender" name="gender" value="MALE"> MALE<br>
  <input type="radio" id="gender" name="gender" value="FEMALE">FEMALE<br><br>
  
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday"><br><br>
  
  <label for="religion"> RELIGION: </label>
  <select id="religion" name="RELIGION">
    <option value="ISLAM">ISLAM</option>
    <option value="HINDU">HINDUISM</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Christianity">Christianity</option>
	<option value="Judaism">Judaism</option>
  </select>
  
  </fieldset>
  <br>
  <fieldset>
  <legend>Contact Information:</legend><br>

  <label for="present address">PRESENT ADDRESS:</label>
  <textarea id="present" name="present">
  
  </textarea><br><br>

  <label for="present address">PRMANENT ADDRESS:</label>
  <textarea id="prmanent" name="permanent" >
  </textarea><br><br>
  
  <label for="phone">Phone:</label>
  <input type="tel" id="phone" name="phone"><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  
 <label for="Website">Website:</label>
 <input type="url" id="Website" name="Website"><br><br>
 
  </fieldset>
  <br>
  
  <fieldset>
  
  <legend>Account Information:</legend><br>
  
  <label for="uname">User name:</label>
  <input type="text" id="uname" name="uname"><br><br>
  
  <label for pass="pass">Password: </label>
  <input type="password" name="pass"><br><br>
  
  </fieldset>
  <br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
