<header>
    <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php">Pet of the Month !</a></li>
          <li><a href="index.php?controller=about" >About us</a></li>
          <img id="logo" src="assets/images/logo.png" alt="Logo PetHouse" height="100" width="100"/>
          <li><a href="index.php?controller=adoption">Adoption</a></li>
          <li><a href="index.php?controller=contact">Contact Us</a></li>

          <?php 
             if(!isset($_SESSION)) 
             { 
                 session_start(); 
             } 
            
            if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
            {
                echo "<li><a href='index.php?controller=login'>Log in</a></li>";
            }else{
                echo "<li><a href='index.php?controller=login&action=exit'>Log out</a></li>";
            }
          
          ?>  
          
          


          
      </ul>
    </nav>
</header>