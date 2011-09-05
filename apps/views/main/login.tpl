<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>{$TEMPLATE_TITLE} - Login</title>
        <base href="{$smarty.const.APP_URI}">
    </head>
	<body>
                <div id="loginBox">

                        <h2><img src="includes/logo3.png"></h2>

                        <form method="POST" action="login.do" id="loginform">

                                <p><label for="username">Username</label><input type="text" name="username" id="username" autocomplete="off" /></p>
                                <p><label for="password">Password</label><input type="password" name="password" id="password" autocomplete="off" /></p>

                        </form> <!-- end form -->

                        <div>

                                <button class="submit" onclick="$('loginform').submit();">Sign In</button>

                        </div>  <!-- end #button -->

                </div><!-- end #loginBox -->
	</body>
</html>
			