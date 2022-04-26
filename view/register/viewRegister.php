<div class="bodyLogin">
<div class="container1"> 
        <form method="POST" action="index.php?controller=register&action=created" class="form1" id="createAccount">
            <h1 class="form_title"> Create Account </h1>
    
    
             <div class="form_input_grp">
                 <input type="text" class="form_input" name="pseudo" id="username" autofocus placeholder="Username" >
             </div>
    
             <div class="form_input_grp">
                <input type="text" class="form_input" name="email" id="email" autofocus placeholder="Email Address"  >
            </div>
    
             <div class="form_input_grp">
                 <input type="password" class="form_input" name="password" id="password" autofocus placeholder="password" >
             </div>
    
             <div class="form_input_grp">
                <input type="password" class="form_input" name="cpassword" id="cpassword" autofocus placeholder="Confirm Password"  >
            </div>
    
             <button class="form_button" type="submit" name="formsend" id="formsend" >Continue</button>
    
             <p class="form_text">
                 <a class="form_link" href="login.html" >Already have an account? Sign in </a>
             </p>

             <p style="color:red;" id="erreur"></p>
        </form>
    </div>
</div>

