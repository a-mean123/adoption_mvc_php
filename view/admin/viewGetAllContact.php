<div class="container admin bg-light">

<h1 class="mt-4 text-info">Gestion des contacts:</h1>

    <div class="row mt-5 mb-4">
    


    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>

    
    <?php
    foreach ($tab_c as $c){
        $id = $c->getId();
        echo "<tr>";
        echo "<td>".$c->getId()."</td>"; 

        echo "<td>".$c->getName()."</td>"; 
        echo "<td>".$c->getLastname()."</td>"; 
        echo "<td>".$c->getEmail()."</td>"; 

        echo "<td>".$c->getPhone()."</td>";

        echo "<td>".$c->getMessage()."</td>"; 
        echo "<td> <a class='btn btn-outline-danger' href='index.php?controller=contact&action=delete&id=$id'> Supprimer </a> </td>";


        echo "</tr>";

    }

    ?>




  </tbody>
</table>
 
    </div>


</div>