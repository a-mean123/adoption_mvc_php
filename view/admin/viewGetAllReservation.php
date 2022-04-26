<div class="container">

    <div class="row">
    <div class="col-9">
    <h3 class="lead display-4">List Reservation</h3>
    </div>
    

    </div>



    <div class="row mt-5 mb-4">
    


    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">pseudo_proprietaire</th>
      <th scope="col">typeAnimal</th>
      <th scope="col">nb_chats</th>
      <th scope="col">nb_chiens</th>
      <th scope="col">race_chat</th>
      <th scope="col">race_chien</th>
      <th scope="col">age</th>

      <th scope="col">image</th>


      <th scope="col">Action</th>

      
      
      
      
      
      
      
      
      
      
      
      
      

    </tr>
  </thead>
  <tbody>

    
    <?php
    foreach ($tab_p as $c){
        $id = $c->getId();
        $imag = $c->getImage();
       
        echo "<tr>";
        echo "<td>".$c->getId()."</td>" ;
        echo "<td>".$c->getpseudo_proprietaire()."</td>" ;
        echo "<td>".$c->gettypeAnimal()."</td>" ;
        echo "<td>".$c->getNb_chats()."</td>" ;
        echo "<td>".$c->getNbChien()."</td>" ;
        echo "<td>".$c->getRaceChat()."</td>" ;
        echo "<td>".$c->getRaceChien()."</td>" ;
        echo "<td>".$c->getAge()."</td>" ;


     
        echo "<td class='w-25'> <img class='w-25' src='assets/images/$imag'>  </td>" ;
       
        echo "
      
        <td> <a class='btn btn-outline-danger' href='index.php?controller=reservation&action=delete&id=$id'> Supprimer </a> </td>";


        echo "</tr>";
        
    }

    ?>




  </tbody>
</table>
 
    </div>


</div>


