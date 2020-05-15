
<html>      
    <head>
        <title>User Registrations System</title>
        <link rel="stylesheet" href="Register_style.css">
        
    </head>
    
        
    <body>
    

        <div class="header">
            <h2>Register</h2>  
        </div>
        <form method="post" action="connect.php">
            <div class="input-group">
                <label>id</label>
                <input type="text" pattern="[0-9]{3,15}" name="id" required autocomplete="off">
            </div>
            <div class="input-group">
                <label>first_name</label>
                <input type="text" name="first_name" pattern="[A-Za-z]{1,40}" required autocomplete="off">
            </div>
            <div class="input-group">
                <label>last_name</label>
                <input type="text" pattern="[a-zA-Z]{1,40}" name="last_name" required autocomplete="off">
            </div>
            <div class="input-group">
                <label>username</label>
                <input type="text" pattern="[a-zA-Z0-9]{1,15}" name="username" required autocomplete="off">
            </div>
            <div class="input-group">
                <input type="hidden"  name="userType"value="cashier">
            </div>
            <div class="input-group">
                <label>password</label>
                <input type="Password"  pattern=".{6,}" name="password" required autocomplete="off">
            </div>
            <div class="input-group">
            <button type="submit" name="Register" class="btn">Register</button>
            </div>
            <p>
                Already a member? <a href="index.php">Login</a>
            </p>
            
        </form>
    </body>
</html>
