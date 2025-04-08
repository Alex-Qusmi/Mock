
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup PAge</title>
</head>
<body>

    <form action="verification.php " method="post">
        <label for="username">Enter your Name</label>
        <input type="text" name="username" id="username" value="" required autofocus>
   
        <label for="password">Enter password</label>
        <input type="password" name="password1" id="password" value="" required autofocus>
        
        <label for="password">Conform your passsword</label>
        <input type="password" name="password" id="password" value="" required autofocus>

        <input type="submit" name="submit" value="Signup">

    </form>

    
</body>
</html>