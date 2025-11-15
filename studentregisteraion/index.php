<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student registation</title>
</head>
<body>
    <h2>Student registation</h2>
    <form action="process.php" method="post" enctype="multipart/form-data">
    <label>Name:</label> <input type="text" name="name"><br><br>
    <label>Email:</label> <input type="email" name="email"><br><br>
   <label>AGE:</label><input type="number" name="age"><br><br>
    <label>Gender:</label>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female<br><br>
    Hobbies: 
    <input type="checkbox" name="hobbies[]" value="Reading">Reading
    <input type="checkbox" name="hobbies[]" value="Sports">Sports<br><br>
    Country: 
    <select name="country">
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
    </select><br><br>
    Profile Picture: <input type="file" name="profile"><br><br>
    <input type="submit" value="Register">
</form>
    
</body>
</html>