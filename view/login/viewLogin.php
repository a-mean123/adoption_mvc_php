<div class="bodyLogin">
    <div class="container1">
        <form method="POST" action="index.php?controller=login&action=created" class="form1" id="login" >
            <h1 class="form_title"> Login </h1>

                <div class="form_input_grp">
                    <input type="text" name="email" id="lemail" class="form_input" autofocus placeholder="Email" required >
                </div>

                <div class="form_input_grp">
                    <input type="password" name="password" id="password" class="form_input" autofocus placeholder="password" required >
                </div>
                
                <button class="form_button" type="submit" name="formlogin" id="formlogin" >Continue</button>

                <p class="form_text">
                    <a href="#" class="form_link">Forgot your password?</a>
                </p>

                <p class="form_text">
                    <a class="form_link" href="index.php?controller=register" >Don't have an account? Create account </a>
                </p>

                <p style="color:red;" id="erreur"></p>

        </form>

        
    </div>  
</div>


