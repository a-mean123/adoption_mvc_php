<button type="button" value="book now" class="Book_Now"><a href="index.php?controller=reservation">Book Now!</a> </button>
    <div class="background"></div>
     <div>
    <h1 id=petHouse>PetHouse</h1>
    </div>

    <section id="petOfTheMonth">
        <div>
            <i class="fas fa-crown fa-5x fa-color"></i> <h2> Pet of the Month!</h2> 
        </div>
        <?php 
              foreach($tab_new as $c){
                $id = $c->getId();
                $img = $c->getImage();
                echo " <img class='zehi' src='assets/images/$img'
                alt='1st place pet'
                title='Pet of the Month'
                height='400' width='400'
                />
                ";
                echo "<p> ".$c->gettypeAnimal() ."</p>";
                echo "<p><span>Owned by</span> :". $c->getpseudo_proprietaire()." </p>";
              }

       
        
        
        
        
        ?>


    </section>