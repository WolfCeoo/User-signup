<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>User sign up</title>
</head>
<body>
    <div id="sign-up-form">
        <!--If user has an account-->
        <div id="sign-in">
            <div id="sign-in-container">
                <div class="logo">
                    <h1 style="font-size: 40px; margin-bottom: 30px;">Welcome</h1>
                </div>
              <form action="sign-in-form">
                <div class="email-field">
                    <label for="mail-label">EMAIL</label><br>
                    <input type="text" id="mail-field" placeholder="your email" style="width: 40%; height: 30px; border: none; border-bottom: 3px solid gray;">
                </div>
                <div class="password-field">
                    <label for="password-label">PASSWORD</label><br>
                    <input type="password" placeholder="your password" style="width: 40%; height: 30px; border: none; border-bottom: 3px solid gray;">
                </div>
                <div id="forgot-password">
                   <a href="index.html" target="_blank"><p>Forgot Password?</p></a>
                </div>
                <div id="sign-in-button">
                    <a href="#">SIGN IN</a>
                </div>
              </form>
            </div>
      
        </div>
        <!--If user doesn't have an account-->
        <div id="sign-up">
            <div class="no-account-text-container">
                <p>Don't have an account?</p>
                <p>Please sign up!  </p>
                                        

            </div>
            <div class="sign-up-btn">
                <a href="" target="_blank">SIGN UP</a>
            </div>
        </div>
    </div>

</body>
</html>
