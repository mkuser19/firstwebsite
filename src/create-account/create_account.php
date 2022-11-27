<!doctype html>
<html>
    <head>
        <title>create account</title>
    </head>
    <body>
        <form action="submitrec.php" method="GET">
            <fieldset>
                <img src="admin images/bootstrap-logo.svg" alt="bootstrap-logo" width="50" height="50">
                <br><br>
                <span>Create your account</span>
                <br><br>
                <div>
                    <input type="text"  name="fname" id="fname" placeholder="First name" required>
                    <label for="fname"></label>
                    <input type="text" name="lname" id="lname" placeholder="Last name" required>
                    <label for="lname"></label>
                </div><br>
                <div>
                    <input type="email" name="email" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput"></label>
                    <input type="password" name="password" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword"></label>
                </div><br>
                <button type="submit">Sign up</button>


            </fieldset>
            
        </form>
    </body>
